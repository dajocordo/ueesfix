<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use Illuminate\Http\Request;

class STicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickett = DB::table('ticket')->get();
        return view('mticket')->with('tickett',$tickett);
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
            $Usuario = $_POST['selUsuario'];;
            $Gestion = $_POST['selGestion'];
            $GestionTipo = $_POST['selGestionTipo'];
            $Estado = 1;
            $Prioridad = $_POST['selPriori'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO ticket (ticket_titulo,ticket_detalles,soportelid,usuariolid,gestionlid,gestiontilid,estadolid,prioridadlid,created_at,updated_at) VALUES(?,?,?,?,?,?,?,?,?,?)",[$Titulo,$Detalles,$Soporte,$Usuario,$Gestion,$GestionTipo,$Estado,$Prioridad,$Creado,$Actual]);

            echo "<script>
                  alert('EXITO. El Ticket ha sido creado correctamente');
                  window.location.href='/ts';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/ts';
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

        
        }

    public function show($id)
    {
        $mticket_show = DB::SELECT('SELECT * FROM ticket WHERE ticketid = ?',[$id]);

        if ($mticket_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/ts';
                  </script>";
        } else{
            // FOREACH TABLA TICKET
            foreach($mticket_show as $mticket_queri){
                $id = $mticket_queri->ticketid;
                $titulo = $mticket_queri->ticket_titulo;
                $detalles = $mticket_queri->ticket_detalles;
                $gestionid = $mticket_queri->gestionlid;
                $tipogestionid = $mticket_queri->gestiontilid;
                $prioridadid = $mticket_queri->prioridadlid;
                $estadoid = $mticket_queri->estadolid;
                $creado = $mticket_queri->created_at;
                $modificado = $mticket_queri->updated_at;
                $tgestion_show = DB::SELECT('SELECT * FROM gestion WHERE gestionid = ?',[$gestionid]);

                // FOREACH TABLA GESTION
                foreach($tgestion_show as $tgestion_queri){
                    $gname = $tgestion_queri->gestion_name;
                    $tgestiontipo_show = DB::SELECT('SELECT * FROM gestiontipo WHERE gestiontipoid = ?',[$tipogestionid]);

                    // FOREACH TABLA GESTION_TIPO
                    foreach($tgestiontipo_show as $tgestiontipo_queri){
                     $gtname = $tgestiontipo_queri->gestiontipo_name;
                     $prioridad_show= DB::SELECT('SELECT * FROM prioridad WHERE prioridadid = ?',[$prioridadid]);

                        //FOREACH TABLA PRIORIDAD 
                    foreach($prioridad_show as $prioridad_queri){
                    $pname = $prioridad_queri->prioridad_name;
                    $estado_show= DB::SELECT('SELECT * FROM estado WHERE estadoid = ?',[$estadoid]);


                        //FOREACH TABLA ESTADO 
                    foreach($estado_show as $estado_queri){
                    $ename = $estado_queri->estado_name;
                   

                        return view('tinfo')->with('id',$id)->with('titulo',$titulo)->with('detalles',$detalles)->with('gname',$gname)->with('gtname',$gtname)->with('creado',$creado)->with('modificado',$modificado) ->with('gtname',$gtname)->With('pname',$pname)->With('ename',$ename);
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
         // $io=$_POST['ii'];
        if (isset($_POST['btnActualizarst'])) {
            $ii = $_REQUEST['ii'];
            $estado = 2;
            $nuevoCambio = date("Y-m-d H:i:s");
            
            $affected = DB::table('ticket')
              ->where('ticketid', $ii)
              ->update(['estadolid' => $estado, 'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/ts';
                  </script>";
  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/u';
                  </script>";
        }
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

    public function stktnewtii()
    {
        $usuarioo = DB::table('usuario')->get();
        $prioridaad = DB::table('prioridad')->get();
        $gestioon = DB::table('gestion')->get();
        $gestioontipoo = DB::table('gestiontipo')->get();
        return view('tnuevo')->with('prioridaad',$prioridaad)->with('gestioon',$gestioon)->with('gestioontipoo',$gestioontipoo)->with('usuarioo',$usuarioo);
    }

}
