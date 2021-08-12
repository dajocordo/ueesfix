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

            echo "<script>
                  alert('El Usuario Tipo, fue creado correctamente');
                  window.location.href='/ut';
                  </script>";        
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/usuariotiponuevo';
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
        $usuarioTipo_show = DB::SELECT('SELECT * FROM usuariotipo WHERE usuariotipoid = ?',[$id]);

        if ($usuarioTipo_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/ut';
                  </script>";
        } else {
            foreach($usuarioTipo_show as $usuarioTipo_queri){
                $id = $usuarioTipo_queri->usuariotipoid;
                $name = $usuarioTipo_queri->usuariotipo_name; 
                $creado = $usuarioTipo_queri->created_at; 
                $modificado = $usuarioTipo_queri->updated_at; 
                return view('usuariotipoinfo')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        $usuarioTipo_edit = DB::SELECT('SELECT * FROM usuariotipo WHERE usuariotipoid = ?',[$id]);

        if ($usuarioTipo_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/ut';
                  </script>";
        } else {
            foreach($usuarioTipo_edit as $usuarioTipo_query){
                $ii = $usuarioTipo_query->usuariotipoid;
                $name = $usuarioTipo_query->usuariotipo_name;
                return view('usuariotipoedit')->with('ii',$ii)->with('name',$name);
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
