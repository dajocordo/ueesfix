<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $users = DB::table('usuario')->get();
        return view('usuarios')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (isset($_POST['btnCrearUsuario'])) {

            $Nombre = $_POST['txtNombre'];
            $Apellido = $_POST['txtApellido'];
            $Correo = $_POST['txtCorreo'];
            $Contra = $_POST['txtPassword'];
            $Tipo = $_POST['selTipoUsuario'];
            $Facultad = $_POST['selFacultad'];
            $Carrera = $_POST['selCarrera'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO usuario (unombre, uapellido, umail, upassword, usuariotti, facultadtti, carreratti, created_at, updated_at) VALUES(?,?,?,?,?,?,?,?,?)",[$Nombre,$Apellido,$Correo,$Contra,$Tipo,$Facultad,$Carrera,$Creado,$Actual]);

            echo "<script>
                  alert('EXITO. Usuario creado correctamente');
                  window.location.href='/u';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/usuarionuevo';
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
    //     if (isset($_POST['btnEnviar'])) {

    //         $addUser = new addUser();
    //         $addUser->txtNombre = $request->get('txtNombre');
    //         $addUser->txtApellido = $request->get('txtApellido');
    //         $addUser->txtCorreo = $request->get('txtCorreo');
    //         $addUser->txtPassword = $request->get('txtPassword');
    //         $addUser->save();

    //         DB::INSERT("INSERT INTO USSERS (unombre, upellido, umail, upassword) VALUES(?,?,?,?)",[$addUser->txtNombre,$addUser->txtApellido,$addUser->txtCorreo,$Contra]);

    //         echo '<script language="javascript">';
    //         echo 'alert("Datos ingresados correctamente")';
    //         echo '</script>';
    //         return view("../home");
        
    //     } else {
    //         echo '<script language="javascript">';
    //         echo 'alert("Hubo un error, favor intentarlo de nuevo")';
    //         echo '</script>';
    //         return view("../nuevousuario");
    //     }
    // }

    }

    /**Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $id = $_REQUEST['id'];
        $user_show = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        if ($user_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/u';
                  </script>";
        } else{
            foreach($user_show as $user_queri){
                $id = $user_queri->usuariocif;
                $name = $user_queri->unombre;
                $apellido = $user_queri->uapellido;
                $correo = $user_queri->umail;
                $creado = $user_queri->created_at;
                $modificado = $user_queri->updated_at;
                return view('usuarioinfo')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo)->with('creado',$creado)->with('modificado',$modificado);
            }
        }
    }

    /**Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_edit = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        if ($user_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/u';
                  </script>";
        } else{
            foreach($user_edit as $user_query){
                $ii = $user_query->usuariocif;
                $name = $user_query->unombre;
                $apellido = $user_query->uapellido;
                $correo = $user_query->umail;
                return view('usuarioedit')->with('ii',$ii)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
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
        // $io=$_POST['ii'];
        if (isset($_POST['btnActualizarU'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevoApellido = $_POST['txtEditApellido'];
            $nuevoCorreo = $_POST['txtEditCorreo'];
            $nuevoCambio = date("Y-m-d H:i:s");
            
            $affected = DB::table('usuario')
              ->where('usuariocif', $ii)
              ->update(['unombre' => $nuevoNombre,'uapellido' => $nuevoApellido,'umail' => $nuevoCorreo, 'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/u';
                  </script>";
  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/u';
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

    public function usenewtti()
    {
        $usertypee = DB::table('usuariotipo')->get();
        $facultaad = DB::table('facultad')->get();
        $carreraa = DB::table('carrera')->get();
        return view('usuarionuevo')->with('usertypee',$usertypee)->with('facultaad',$facultaad)->with('carreraa',$carreraa);
    }

}
