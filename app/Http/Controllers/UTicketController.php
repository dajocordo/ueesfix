<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use Illuminate\Http\Request;

class UTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickett = DB::table('ticket')->get();
        return view('tickets')->with('tickett',$tickett);
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
            $Soporte = 1;
            $Usuario = $_POST['userid'];
            $Gestion = $_POST['selGestion'];
            $GestionTipo = $_POST['selGestionTipo'];
            $Estado = 1;
            $Prioridad = $_POST['selPriori'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO ticket (ticket_titulo,ticket_detalles,soportelid,usuariolid,gestionlid,gestiontilid,estadolid,prioridadlid,created_at,updated_at) VALUES(?,?,?,?,?,?,?,?,?,?)",[$Titulo,$Detalles,$Soporte,$Usuario,$Gestion,$GestionTipo,$Estado,$Prioridad,$Creado,$Actual]);

            echo "<script>
                  alert('EXITO. El Ticket ha sido creado correctamente');
                  window.location.href='/inicio';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/inicio';
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
    public function show($id)
    {
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

                        return view('ticketinfo')->with('id',$id)->with('titulo',$titulo)->with('detalles',$detalles)->with('gname',$gname)->with('gtname',$gtname)->with('creado',$creado)->with('modificado',$modificado);
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
        //
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

    public function utktnewtii()
    {
        $prioridaad = DB::table('prioridad')->get();
        $gestioon = DB::table('gestion')->get();
        $gestioontipoo = DB::table('gestiontipo')->get();
        return view('ticketn')->with('prioridaad',$prioridaad)->with('gestioon',$gestioon)->with('gestioontipoo',$gestioontipoo);
    }

}