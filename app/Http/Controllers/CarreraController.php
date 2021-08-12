<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $race = DB::table('carrera')->get();
        return view('carreras')->with('race',$race);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarCarrera'])) {

            $NombreCarrera = $_POST['txtNombreCarrera'];
            $Facultad = $_POST['selFacultad'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO carrera (carrera_name, ffacultadid, created_at, updated_at) VALUES(?,?,?,?)",[$NombreCarrera,$Facultad,$Creado,$Actual]);

            echo "<script>
                  alert('EXITO. La Carrera ha sido creado correctamente');
                  window.location.href='/c';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/c';
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
        $resul = DB::SELECT('SELECT * FROM carrera WHERE carreraid = ?',[$id]);

        foreach($resul as $quer){
            $id = $quer->carreraid;
            $name = $quer->carrera_name;
            $creado1 = $quer->created_at;
            $actual1 = $quer->updated_at;
            return view('carrerainfo')->with('id',$id)->with('name',$name)->with('creado1',$creado1)->with('actual1',$actual1);
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
        $result = DB::SELECT('SELECT * FROM carrera WHERE carreraid = ?',[$id]);

        foreach($result as $query){
            $ii = $query->carreraid;
            $name = $query->carrera_name;

            return view('carreraedita')->with('ii',$ii)->with('name',$name);
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
        if (isset($_POST['btnActualizar'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $Actual = date("Y-m-d H:i:s");

            $affected = DB::table('carrera')
              ->where('carreraid', $ii)
              ->update(['carrera_name' => $nuevoNombre,'updated_at' => $Actual]);

            echo '<script language="javascript">';
            echo 'alert("EXITO: Los datos ya fueron actualizados")';
            echo '</script>';
            return redirect('/carreras');
            
        } else {
            echo '<script language="javascript">';
            echo 'alert("ERROR: favor intentarlo de nuevo")';
            echo '</script>';
            return view('/usuarios');
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

    public function newcarreer(){
        $facultaad = DB::table('facultad')->get();
        return view('carreranueva')->with('facultaad',$facultaad);
    }

}
