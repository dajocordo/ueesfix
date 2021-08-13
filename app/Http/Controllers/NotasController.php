<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickett = DB::table('ticket')->get();
        return view('ticketnota')->with('tickett',$tickett);
    }



    public function newnote($id)
    {
        $tickettonote_show = DB::SELECT('SELECT * FROM ticket WHERE ticketid = ?',[$id]);

        if ($tickettonote_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/ticketnota';
                  </script>";
        } else{
            // FOREACH TABLA TICKET
            foreach($tickettonote_show as $ticket_queri){
                $id = $ticket_queri->ticketid;
                $titulo = $ticket_queri->ticket_titulo;
                $detalles = $ticket_queri->ticket_detalles;
                $gestionid = $ticket_queri->fgestionid;
                $tipogestionid = $ticket_queri->fgestiontipoid;
                $usuario = $ticket_queri->fusuarioid;
                $soporte = $ticket_queri->fsoporteid;
                $creado = $ticket_queri->created_at;
                $modificado = $ticket_queri->updated_at;
                return view ('ticketnota')->with('id',$id)->with('usuario',$usuario)->with('soporte',$soporte);
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnCreaNotaUsr'])) {

            $Nota = $_POST['txtNota'];
            $Ticket = $_POST['txtTicket'];
            $Validar = $_POST['txtValidar'];
            $Usuario = $_POST['txtCIF'];
            $Soporte = $_POST['txtSoporte'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO notas (nota,es_user,fusuarioid,fsoporteid,fticketid,created_at,updated_at) VALUES(?,?,?,?,?,?,?)",[$Nota,$Validar,$Usuario,$Soporte,$Ticket,$Creado,$Actual]);

            echo "<script>
                  alert('EXITO. La nota ha sido enviada correctamente');
                  window.location.href='/ticketnv';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/ticketnv';
                  </script>";
        }    }

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
        // $ticket_show = DB::SELECT('SELECT * FROM ticket WHERE ticketid = ?',[$id]);

        // if ($ticket_show == null) {
        //     echo "<script>
        //           alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
        //           window.location.href='/ticketnota';
        //           </script>";
        // } else{
        //     // FOREACH TABLA TICKET
        //     foreach($ticket_show as $ticket_queri){
        //         $id = $ticket_queri->ticketid;
        //         $titulo = $ticket_queri->ticket_titulo;
        //         $detalles = $ticket_queri->ticket_detalles;
        //         $gestionid = $ticket_queri->gestionlid;
        //         $tipogestionid = $ticket_queri->gestiontilid;
        //         $creado = $ticket_queri->created_at;
        //         $modificado = $ticket_queri->updated_at;
        //         $tgestion_show = DB::SELECT('SELECT * FROM gestion WHERE gestionid = ?',[$gestionid]);

        //         // FOREACH TABLA GESTION
        //         foreach($tgestion_show as $tgestion_queri){
        //             $gname = $tgestion_queri->gestion_name;
        //             $tgestiontipo_show = DB::SELECT('SELECT * FROM gestiontipo WHERE gestiontipoid = ?',[$tipogestionid]);

        //             // FOREACH TABLA GESTION_TIPO
        //             foreach($tgestiontipo_show as $tgestiontipo_queri){
        //                 $gtname = $tgestiontipo_queri->gestiontipo_name;

        //                 return view('ticketinfo')->with('id',$id)->with('titulo',$titulo)->with('detalles',$detalles)->with('gname',$gname)->with('gtname',$gtname)->with('creado',$creado)->with('modificado',$modificado);
        //             }
        //         }
        //     }
        // }
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

    public function tktnewtii()
    {
        $prioridaad = DB::table('prioridad')->get();
        $gestioon = DB::table('gestion')->get();
        $gestioontipoo = DB::table('gestiontipo')->get();
        return view('ticketnuevo')->with('prioridaad',$prioridaad)->with('gestioon',$gestioon)->with('gestioontipoo',$gestioontipoo);
    }

}