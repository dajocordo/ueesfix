<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $soporte = [];
        $getUsers = User::select('*')->where('tipo', 2)->get();
        foreach ($getUsers as $role) {
            $usr = new \stdClass();
            $usr->id = $role->id;
            $usr->name = $role->name;
            $usr->correo = $role->email;
            $usr->fecha = formatDate($role->created_at);
            $soporte[] = $usr;
        }
        return view('soporte')->with('soport', $soporte);
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
            $Contra = md5($_POST['txtPassword']);
            $Telefono = $_POST['txtTelefono'];
            $Tipo = $_POST['selTipoSoporte'];
            $Roles = $_POST['selRoles'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO soporte (soporte_name, soporte_apellido, soporte_mail, soporte_pass, soporte_tel, fsoportetipoid, frolesid, created_at, updated_at) VALUES(?,?,?,?,?,?,?,?,?)",[$Nombre,$Apellido,$Correo,$Contra,$Telefono,$Tipo,$Roles,$Creado,$Actual]);

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

    }

    /**Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soporte_show = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$id]);

        if ($soporte_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/s';
                  </script>";
        } else{
            foreach($soporte_show as $soporte_queri){
                $name = $soporte_queri->snombre;
                $apellido = $soporte_queri->sapellido;
                $correo = $soporte_queri->smail;
                $telefono = $soporte_queri->stelefono;
                $creado = $soporte_queri->created_at;
                $modificado = $soporte_queri->updated_at;
                return view('soporteinfo')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo)->with('telefono',$telefono)->with('creado',$creado)->with('modificado',$modificado);
            }
        }
    }

    /**Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getUser = User::find($id);
        if ($getUser) {
            $user = [
                'id' => $getUser->id,
                'name' => $getUser->name,
                'correo' => $getUser->email,
            ];
            return view('usuarioedit')->with('user', $user);
        }
        echo "<script>
              alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
              window.location.href='/s';
              </script>";
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
        if (isset($_POST['btnActualizarSoporte'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevoApellido = $_POST['txtEditApellido'];
            $nuevoCorreo = $_POST['txtEditCorreo'];
            $nuevoTelefono = $_POST['txtEditTelefono'];
            $nuevoCambio = date("Y-m-d H:i:s");

            $affected = DB::table('soporte')
              ->where('soportecif', $ii)
              ->update(['snombre' => $nuevoNombre,'sapellido' => $nuevoApellido, 'smail' => $nuevoCorreo,'stelefono' => $nuevoTelefono, 'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('Exito. El soporte fue actualizado correctamente');
                  window.location.href='/s';
                  </script>";
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/s';
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