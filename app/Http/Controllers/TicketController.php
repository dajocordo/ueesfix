<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $tickett = DB::table('ticket')->get();
        return view('tickets')->with('tickett',$tickett);
    }

    public function Tickettnuevo() {
      $tickeetnuevo = DB::table('ticket')->get();
      return view('tktnuevo')->with('tickeetnuevo',$tickeetnuevo);
    }

    public function Tickettpendiente() {
      $tickeetpendiente = DB::table('ticket')->get();
      return view('tktpendiente')->with('tickeetpendiente',$tickeetpendiente);
    }

    public function Ticketterminado() {
      $tickeetterminado = DB::table('ticket')->get();
      return view('tktterminado')->with('tickeetterminado',$tickeetterminado);
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
        $usuarioo = DB::table('usuario')->get();
        $prioridaad = DB::table('prioridad')->get();
        $gestioon = DB::table('gestion')->get();
        $gestioontipoo = DB::table('gestiontipo')->get();
        return view('ticketnuevo')->with('usuarioo',$usuarioo)->with('prioridaad',$prioridaad)->with('gestioon',$gestioon)->with('gestioontipoo',$gestioontipoo);
    }

}