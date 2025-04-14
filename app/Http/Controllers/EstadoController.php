<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getEstados = Listado::where('grupo', 'estado_ticket')->get();
        $state = formatLists($getEstados);
        return view('estado', compact('state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarEstado'])) {

            $NombreEstado = $_POST['txtNombreEstado'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO estado (estado_name, created_at, updated_at) VALUES(?,?,?)",[$NombreEstado,$Creado,$Actual]);

            echo "<script>
                  alert('Exito. El estado fue creado correctamente');
                  window.location.href='/e';
                  </script>";
        
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/estadonuevo';
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
        $estado_show = DB::SELECT('SELECT * FROM estado WHERE estadoid = ?',[$id]);
        if ($estado_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/e';
                  </script>";
        } else{
            foreach($estado_show as $estado_queri){
                $id = $estado_queri->estadoid;
                $name = $estado_queri->estado_name;
                $creado = $estado_queri->created_at;
                $modificado = $estado_queri->updated_at;
                return view('/estadoinfo')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        $estado_edit = DB::SELECT('SELECT * FROM estado WHERE estadoid = ?',[$id]);

        if ($estado_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/e';
                  </script>";
        } else{
            foreach($estado_edit as $estado_query){
                $ii = $estado_query->estadoid;
                $name = $estado_query->estado_name;    
                return view('/estadoedit')->with('ii',$ii)->with('name',$name);
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
            $nuevoNombre = $_POST['txtEditEstado'];
            $nuevoCambio = date("Y-m-d H:i:s");

            $affected = DB::table('estado')
              ->where('estadoid', $ii)
              ->update(['estado_name' => $nuevoNombre,'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/e';
                  </script>";
  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/e';
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
