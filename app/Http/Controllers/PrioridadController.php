<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrioridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priori = DB::table('prioridad')->get();
        return view('prioridad')->with('priori',$priori);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarPriori'])) {

            $PrioridaNombre = $_POST['txtNombrePrioridad'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO prioridad (prioridad_name, created_at, updated_at) VALUES(?,?,?)",[$PrioridaNombre, $Creado, $Actual]);

            echo '<script language="javascript">';
            echo 'alert("La Prioridad, ha sido creada con éxito")';
            echo '</script>';
            return view("/prioridad");
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return view("/prioridadnueva");
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
        $prioridad_show = DB::SELECT('SELECT * FROM prioridad WHERE prioridadid = ?',[$id]);

        if ($prioridad_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/g';
                  </script>";
        } else{
            foreach($prioridad_show as $prioridad_queri){
                $id = $prioridad_queri->prioridadid;
                $name = $prioridad_queri->prioridad_name;
                $creado = $prioridad_queri->created_at;
                $modificado = $prioridad_queri->updated_at;
                return view('/prioridadinfo')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        $prioridad_edit = DB::SELECT('SELECT * FROM prioridad WHERE prioridadid = ?',[$id]);

        if ($prioridad_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/g';
                  </script>";
        } else{
            foreach($prioridad_edit as $prioridad_query){
                $id = $prioridad_query->prioridadid;
                $name = $prioridad_query->prioridad_name;
                $creado = $prioridad_query->created_at;
                $modificado = $prioridad_query->updated_at;
                return view('/prioridadedit')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        //
    }
}
