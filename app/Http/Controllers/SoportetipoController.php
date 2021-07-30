<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoportetipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sopotipo = DB::table('soportetipo')->get();
        return view('soportetipos')->with('sopotipo',$sopotipo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarSoporteTipo'])) {

            $SoporteTipoNombre = $_POST['txtSoporteTipoNombre'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO soportetipo (soportetipo_name, created_at, updated_at) VALUES(?,?,?)",[$SoporteTipoNombre, $Creado, $Actual]);

            echo '<script language="javascript">';
            echo 'alert("El Soporte Tipo, ha sido creado con éxito")';
            echo '</script>';
            return view("/soportetipos");
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return view("/soportetiponuevo");
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
        //
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
    public function update(Request $ii)
    {
        if (isset($_POST['btnActualizarSopoTipo'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombreSoporteTipo = $_POST['txtEditNombreSoporteTipo'];
            $Actualizado = date("Y-m-d H:i:s");

            $affected = DB::table('soportetipo')
              ->where('soportetipoid', $ii)
              ->update(['soportetipo_name' => $nuevoNombreSoporteTipo,'updated_at' => $Actualizado]);

            echo '<script language="javascript">';
            echo 'alert("EXITO: Los datos ya fueron actualizados")';
            echo '</script>';
            return view('/usuarios');
            
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
}
