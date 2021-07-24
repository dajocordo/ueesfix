<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $facultad1 = DB::table('facultad')->get();
        return view('facultad')->with('facultad1',$facultad1);

    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        if (isset($_POST['btnEnviar'])) {

            $Nombre = $_POST['txtNombre'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO facultad (facultad_name, created_at, updated_at) VALUES(?,?,?,?)",[$Nombre,$Creado,$Actual]);

            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return view("/facultad");
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return view("/facultadnuevo");
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
          $resul = DB::SELECT('SELECT * FROM facultad WHERE facultadid = ?',[$id]);

        foreach($resul as $quer){
            $id = $quer->facultadid;
            $name = $quer->facultad_name;
        
            return view('facultadinfo')->with('id',$id);
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    // public function edit($id) 
    // {
    //     $resolt = DB::SELECT('SELECT * FROM facultad WHERE facultadid = ?',[$id]);

    //     foreach($resolt as $query){
    //         $ii = $query->facultadid;
    //         $name = $query->facultad_name;
            
    //         return view('facultadedita')->with('ii',$ii)->with('name',$name);
    //     }
    // }

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
           

            $affected = DB::table('facultad')
              ->where('facultadid', $ii)
              ->update(['facultad_name' => $nuevoNombre,'updated_at' => $Actual]);

            echo '<script language="javascript">';
            echo 'alert("EXITO: Los datos ya fueron actualizados")';
            echo '</script>';
            return view('/usuarios');

              } else {
            echo '<script language="javascript">';
            echo 'alert("ERROR: favor intentarlo de nuevo")';
            echo '</script>';
            return view('/usuarios');
            // return redirect('/dale')->with('var');

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
