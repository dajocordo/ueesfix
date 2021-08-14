<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roll = DB::table('roles')->get();
        return view('roles')->with('roll',$roll);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarRol'])) {

            $NombreRol = $_POST['txtNombreRol'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO roles (roles_name, created_at, updated_at) VALUES(?,?,?)",[$NombreRol,$Creado,$Actual]);

            echo "<script>
                  alert('EXITO. El Rol ha sido creado correctamente');
                  window.location.href='/r';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/rolnuevo';
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
        $rol_show = DB::SELECT('SELECT * FROM roles WHERE roles_id = ?',[$id]);
        if ($rol_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/r';
                  </script>";
        } else{
            foreach($rol_show as $rol_queri){
                $id = $rol_queri->rolesid;
                $name = $rol_queri->roles_name;
                $creado = $rol_queri->created_at;
                $modificado = $rol_queri->updated_at;
                return view('/rolinfo')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        $rol_edit = DB::SELECT('SELECT * FROM roles WHERE roles_id = ?',[$id]);

        if ($rol_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/r';
                  </script>";
        } else{
            foreach($rol_edit as $rol_query){
                $ii = $rol_query->rolesid;
                $name = $rol_query->roles_name;    
                return view('/roledit')->with('ii',$ii)->with('name',$name);
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
            $nuevoRol = $_POST['txtEditNombre'];
            $nuevoCambio = date("Y-m-d H:i:s");

            $affected = DB::table('roles')
              ->where('rolesid', $ii)
              ->update(['roles_name' => $nuevoRol,'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/r';
                  </script>";
  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/r';
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
