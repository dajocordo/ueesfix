<?php

namespace App\Http\Controllers;

use App\Models\Listado;
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
        $sopotipo = [];
        $getRoles = Listado::where('grupo', 'soporte_tipo')->get();
        foreach ($getRoles as $role) {
            $rol = new \stdClass();
            $rol->id = $role->id;
            $rol->name = $role->valor;
            $rol->fecha = "";
            $sopotipo[] = $rol;
        }
        return view('soportetipo', compact('sopotipo'));
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

            echo "<script>
                 alert('El Soporte Tipo, ha sido creado con éxito');
                 window.location.href='/st';
                 </script>";
        } else {
            echo "<script>
                 alert('Hubo un error, favor intentarlo de nuevo');
                 window.location.href='/soportetiponuevo';
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
        $soportetipo_show = DB::SELECT('SELECT * FROM soportetipo WHERE soportetipoid = ?',[$id]);

        if ($soportetipo_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/st';
                  </script>";
        } else{
            foreach($soportetipo_show as $soportetipo_queri){
                $name = $soportetipo_queri->soportetipo_name;
                $creado = $soportetipo_queri->created_at;
                $modificado = $soportetipo_queri->updated_at;
                return view('soportetipoinfo')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        $soportetipo_edit = DB::SELECT('SELECT * FROM soportetipo WHERE soportetipoid = ?',[$id]);

        if ($soportetipo_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/st';
                  </script>";
        } else{
            foreach($soportetipo_edit as $soportetipo_query){
                $ii = $soportetipo_query->soportetipoid;
                $name = $soportetipo_query->soportetipo_name;
                $creado = $soportetipo_query->created_at;
                $modificado = $soportetipo_query->updated_at;
                return view('soportetipoedit')->with('ii',$ii)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        if (isset($_POST['btnActualizarSopoTipo'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombreSoporteTipo = $_POST['txtEditNombreSoporteTipo'];
            $Actualizado = date("Y-m-d H:i:s");

            $affected = DB::table('soportetipo')
              ->where('soportetipoid', $ii)
              ->update(['soportetipo_name' => $nuevoNombreSoporteTipo,'updated_at' => $Actualizado]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/st';
                  </script>";  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/st';
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
