<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $soport = DB::table('soporte')->get();
        return view('soporte')->with('soport',$soport);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (isset($_POST['btnCrearSoporte'])) {

            $Nombre = $_POST['txtNombre'];
            $Apellido = $_POST['txtApellido'];
            $Correo = $_POST['txtCorreo'];
            $Contra = $_POST['txtPassword'];
            $Telefono = $_POST['txtTelefono'];
            $Tipo = $_POST['selTipoSoporte'];
            $Roles = $_POST['selRoles'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO soporte (snombre, sapellido, smail, spassword, stelefono, soportetti, roltti, created_at, updated_at) VALUES(?,?,?,?,?,?,?,?,?)",[$Nombre,$Apellido,$Correo,$Contra,$Telefono,$Tipo,$Roles,$Creado,$Actual]);

            echo "<script>
            alert('Exito. El soporte fue ingresado correctamente');
            window.location.href='/s';
            </script>";
        
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/soportenuevo';
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
        $resul = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$id]);

        foreach($resul as $quer){
            $name = $quer->snombre;
            $apellido = $quer->sapellido;
            $correo = $quer->smail;
            return view('soporteinfo')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
        }
    }

    /**Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$id]);

        foreach($result as $query){
            $ii = $query->soportecif;
            $name = $query->snombre;
            $apellido = $query->sapellido;
            $correo = $query->smail;
            return view('soporteedit')->with('ii',$ii)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
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
        if (isset($_POST['btnActualizar'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevoApellido = $_POST['txtEditApellido'];
            $nuevoCorreo = $_POST['txtEditCorreo'];

            $affected = DB::table('soporte')
              ->where('soportecif', $ii)
              ->update(['snombre' => $nuevoNombre,'sapellido' => $nuevoApellido,'smail' => $nuevoCorreo]);

            echo "<script>
            alert('Exito. El soporte fue actualizado correctamente');
            window.location.href='/s';
            </script>";
  
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/soporte';
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

    public function sopnewtii()
    {
        $sopotypee = DB::table('soportetipo')->get();
        $rolee = DB::table('roles')->get();
        return view('soportenuevo')->with('sopotypee',$sopotypee)->with('rolee',$rolee);
    }

}