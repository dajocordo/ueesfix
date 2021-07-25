<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsuarioTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariotipo1 = DB::table('usuariotipo')->get();
        return view('usuariotipo')->with('usuariotipo1',$usuariotipo1);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
      if (isset($_POST['btnEnviarUsuarioTipo'])) {

            $NombreUsuarioTipo = $_POST['txtNombreUsuarioTipo'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO usuariotipo (usuariotipo_name, created_at, updated_at) VALUES(?,?,?)",[$NombreUsuarioTipo,$Creado,$Actual]);

            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect("/f");
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return redirect("/usuariotiponuevo");
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
         $resul = DB::SELECT('SELECT * FROM usuariotipo WHERE usuariotipoid = ?',[$id]);

        foreach($resul as $quer){
            $id = $quer->usuariotipoid;
            $name = $quer->usuariotipo_name; 
            $creado1 = $quer->created_at; 
            $actual1 = $quer->updated_at; 
        
            return view('usuariotipoinfo')->with('id',$id)->with('name',$name)->with('creado1',$creado1)->with('actual1',$actual1);}

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resolt = DB::SELECT('SELECT * FROM usuariotipo WHERE usuariotipoid = ?',[$id]);

        foreach($resolt as $query){
            $ii = $query->usuariotipoid;
            $name = $query->usuariotipo_name;
            
            return view('usuariotipoedita')->with('ii',$ii)->with('name',$name);
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
        if (isset($_POST['btnActualizar'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $Actual = date("Y-m-d H:i:s");
           

            $affected = DB::table('usuariotipo')
              ->where('usuariotipoid', $ii)
            ->update(['usuariotipo_name' => $nuevoNombre,'updated_at' => $Actual]);

            echo '<script language="javascript">';
            echo 'alert("EXITO: Los datos ya fueron actualizados")';
            echo '</script>';
            return redirect('/usuariotipo');

              } else {
            echo '<script language="javascript">';
            echo 'alert("ERROR: favor intentarlo de nuevo")';
            echo '</script>';
            return redirect('/usuariotipo');
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
