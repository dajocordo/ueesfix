<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestion1 = DB::table('gestion')->get();
        return view('gestion')->with('gestion1',$gestion1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarGestion'])) {

            $NombreGestion = $_POST['txtNombreGestion'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO gestion (gestion_name, created_at, updated_at) VALUES(?,?,?)",[$NombreGestion,$Creado,$Actual]);

            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect("/g");
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return redirect("/gestionnuevo");
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
        $gestion_show = DB::SELECT('SELECT * FROM gestion WHERE gestionid = ?',[$id]);
        if ($gestion_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/g';
                  </script>";
        } else{
            foreach($gestion_show as $gestion_queri){
                $id = $gestion_queri->gestionid;
                $name = $gestion_queri->gestion_name;
                $creado = $gestion_queri->created_at;
                $modificado = $gestion_queri->updated_at;
                return view('/gestioninfo')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        $gestion_edit = DB::SELECT('SELECT * FROM gestion WHERE gestionid = ?',[$id]);

        if ($gestion_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/g';
                  </script>";
        } else{
            foreach($gestion_edit as $gestion_query){
                $ii = $gestion_query->gestionid;
                $name = $gestion_query->gestion_name;    
                return view('/gestionedit')->with('ii',$ii)->with('name',$name);
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
    public function update(Request $ii)
    {
        if (isset($_POST['btnActualizarR'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevoCambio = date("Y-m-d H:i:s");

            $affected = DB::table('gestion')
              ->where('gestionid', $ii)
              ->update(['gestion_name' => $nuevoNombre,'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/g';
                  </script>";
  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/g';
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
        //
    }
}
