<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getTickets = Ticket::select('*')->get();
        $tickets = $this->formatTicket($getTickets);
        return view('tickets', compact('tickets'));
    }

    public function Tickettnuevo()
    {
        $getTickets = Ticket::select('*')->where('estado_ticket', 7)->get();
        $tickets = $this->formatTicket($getTickets);
        return view('tktnuevo', compact('tickets'));
    }

    public function Tickettpendiente()
    {
        $getTickets = Ticket::select('*')->where('estado_ticket', 8)->get();
        $tickets = $this->formatTicket($getTickets);
        return view('tktpendiente', compact('tickets'));
    }

    public function Ticketterminado()
    {
        $getTickets = Ticket::select('*')->where('estado_ticket', 9)->get();
        $tickets = $this->formatTicket($getTickets);
        return view('tktterminado', compact('tickets'));
    }

    private function formatTicket($tickets): array
    {
        $ticket = [];
        if ($tickets) {
            foreach ($tickets as $value) {
                $tk = new \stdClass();
                $tk->id = $value->id;
                $tk->titulo = $value->titulo;
                $tk->detalle = $value->detalle;
                $tk->estado_ticket = $value->estado_ticket;
                $tk->estado = $value->listado->valor ?? '';
                $tk->fecha = formatDate($value->created_at);
                $ticket[] = $tk;
            }
        }
        return $ticket;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnCrearTicketFromAdm'])) {

            $Titulo = $_POST['txtTitulo'];
            $Detalles = $_POST['txtDetalles'];
            $Soporte = 2021081403;
            $Usuario = $_POST['selUsuario'];
            $Gestion = $_POST['selGestion'];
            $GestionTipo = $_POST['selGestionTipo'];
            $Estado = 1;
            $Prioridad = $_POST['selPriori'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO ticket (ticket_titulo,ticket_detalles,fsoporteid,fusuarioid,fgestionid,fgestiontipoid,festadoid,fprioridadid,created_at,updated_at) VALUES(?,?,?,?,?,?,?,?,?,?)",[$Titulo,$Detalles,$Soporte,$Usuario,$Gestion,$GestionTipo,$Estado,$Prioridad,$Creado,$Actual]);

            // $get_tkt = DB::SELECT('SELECT * FROM ticket WHERE ticketid = ?',[SELECT LAST_INSERT_ID()]);

            // $CreadorTicket = $_POST['adminid'];
            // $HistoryTitle = "Creación de ticket";
            // $HistoryDetalles = "El ticket fue creado el: ".$Creado."";

            // DB::INSERT("INSERT INTO historial (historial_titulo,historial_detalles, fticketid,fsoporteid,created_at,updated_at) VALUES(?,?,?,?,?,?)",[$HistoryTitle,$HistoryDetalles,$ticketid,$CreadorTicket,$Creado,$Actual]);

            echo "<script>
                  alert('EXITO. El Ticket ha sido creado correctamente');
                  window.location.href='/t';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/t';
                  </script>";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function show($id) {
      $ticket_show = DB::SELECT('SELECT * FROM ticket WHERE ticketid = ?',[$id]);

        if ($ticket_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/t';
                  </script>";
        } else{
            // FOREACH TABLA TICKET
            foreach($ticket_show as $ticket_queri){
                $id = $ticket_queri->ticketid;
                $titulo = $ticket_queri->ticket_titulo;
                $detalles = $ticket_queri->ticket_detalles;
                $gestionid = $ticket_queri->gestionlid;
                $tipogestionid = $ticket_queri->gestiontilid;
                $estadoid = $ticket_queri->estadolid;
                $prioridadid = $ticket_queri->prioridadlid;
                $creado = $ticket_queri->created_at;
                $modificado = $ticket_queri->updated_at;
                $tgestion_show = DB::SELECT('SELECT * FROM gestion WHERE gestionid = ?',[$gestionid]);

                // FOREACH TABLA GESTION
                foreach($tgestion_show as $tgestion_queri){
                    $gname = $tgestion_queri->gestion_name;
                    $tgestiontipo_show = DB::SELECT('SELECT * FROM gestiontipo WHERE gestiontipoid = ?',[$tipogestionid]);

                    // FOREACH TABLA GESTION_TIPO
                    foreach($tgestiontipo_show as $tgestiontipo_queri){
                        $gtname = $tgestiontipo_queri->gestiontipo_name;
                        $testadoo_show = DB::SELECT('SELECT * FROM estado WHERE estadoid = ?',[$estadoid]);

                        // FOREACH TABLA ESTADO
                        foreach($testadoo_show as $testadoo_queri){
                            $ename = $testadoo_queri->estado_name;
                            $tprioridaad_show = DB::SELECT('SELECT * FROM prioridad WHERE prioridadid = ?',[$prioridadid]);

                            // FOREACH TABLA PRIORIDAD
                            foreach($tprioridaad_show as $tprioridaad_queri){
                                $pname = $tprioridaad_queri->prioridad_name;

                                return view('ticketinfo')->with('id',$id)->with('titulo',$titulo)->with('detalles',$detalles)->with('gname',$gname)->with('gtname',$gtname)->with('pname',$pname)->with('ename',$ename)->with('creado',$creado)->with('modificado',$modificado);
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $ticket_edit = DB::SELECT('SELECT * FROM ticket WHERE ticketid = ?',[$id]);

        if ($ticket_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/t';
                  </script>";
        } else{
            // FOREACH TABLA TICKET
            foreach($ticket_show as $ticket_query){
                $id = $ticket_query->ticketid;
                $titulo = $ticket_query->ticket_titulo;
                $detalles = $ticket_query->ticket_detalles;
                $gestionid = $ticket_query->gestionlid;
                $tipogestionid = $ticket_queri->gestiontilid;
                $estadoid = $ticket_queri->estadolid;
                $prioridadid = $ticket_queri->prioridadlid;
                $creado = $ticket_queri->created_at;
                $modificado = $ticket_queri->updated_at;
                $tgestion_show = DB::SELECT('SELECT * FROM gestion WHERE gestionid = ?',[$gestionid]);

                // FOREACH TABLA GESTION
                foreach($tgestion_show as $tgestion_queri){
                    $gname = $tgestion_queri->gestion_name;
                    $tgestiontipo_show = DB::SELECT('SELECT * FROM gestiontipo WHERE gestiontipoid = ?',[$tipogestionid]);

                    // FOREACH TABLA GESTION_TIPO
                    foreach($tgestiontipo_show as $tgestiontipo_queri){
                        $gtname = $tgestiontipo_queri->gestiontipo_name;
                        $testadoo_show = DB::SELECT('SELECT * FROM estado WHERE estadoid = ?',[$estadoid]);

                        // FOREACH TABLA ESTADO
                        foreach($testadoo_show as $testadoo_queri){
                            $ename = $testadoo_queri->estado_name;
                            $tprioridaad_show = DB::SELECT('SELECT * FROM prioridad WHERE prioridadid = ?',[$prioridadid]);

                            // FOREACH TABLA PRIORIDAD
                            foreach($tprioridaad_show as $tprioridaad_queri){
                                $pname = $tprioridaad_queri->prioridad_name;

                                return view('ticketinfo')->with('id',$id)->with('titulo',$titulo)->with('detalles',$detalles)->with('gname',$gname)->with('gtname',$gtname)->with('pname',$pname)->with('ename',$ename)->with('creado',$creado)->with('modificado',$modificado);
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function tktnewtii()
    {
        $usuarioo = User::select('*')->get();
        $prioridaad = Listado::where('grupo', 'prioridad')->get();
        $gestioon = Listado::where('grupo', 'gestion')->get();
        $gestioontipoo = Listado::where('grupo', 'tipo_gestion')->get();

        $data = [
            'usuario' => formatUsers($usuarioo),
            'prioridad' => formatLists($prioridaad),
            'gestion' => formatLists($gestioon),
            'gestionTipo' => formatLists($gestioontipoo)
        ];

        return view('ticketnuevo', compact('data'));
    }

}