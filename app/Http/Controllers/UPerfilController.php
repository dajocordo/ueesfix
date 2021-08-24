<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use Illuminate\Http\Request;

class UPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usser = DB::table('usuario')->get();
        return view('uperfil')->with('usser',$usser);
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
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO soporte (usuario_name, usuario_apellido, usuario_correo, usuario_pass, usuario_tel, created_at, updated_at) VALUES(?,?,?,?,?,?,?,)",[$Nombre,$Apellido,$Correo,$Contra,$Telefono,$Creado,$Actual]);

            echo "<script>
            alert('Exito. El soporte fue ingresado correctamente');
            window.location.href='/up';
            </script>";
        
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/up';
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
        $soporte_show = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        if ($soporte_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/up';
                  </script>";
        } else{
            foreach($soporte_show as $soporte_queri){
                 $id = $soporte_queri->usuariocif;
                $name = $soporte_queri->usuario_name;
                $apellido = $soporte_queri->usuario_apellido;
                $correo = $soporte_queri->usuario_correo;
                $telefono = $soporte_queri->usuario_tel;
                $creado = $soporte_queri->created_at;
                $modificado = $soporte_queri->updated_at;
                return view('umicuenta')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo)->with('telefono',$telefono)->with('creado',$creado)->with('modificado',$modificado);
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
        $soporte_edit = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        if ($soporte_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/up';
                  </script>";
        } else{
            foreach($soporte_edit as $soporte_query){
                $ii = $soporte_query->usuariocif;
                $name = $soporte_query->usuario_name;
                $apellido = $soporte_query->usuario_apellido;
                $correo = $soporte_query->usuario_correo;
                $telefono = $soporte_query->usuario_tel;
                return view('ueditarperfil')->with('ii',$ii)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo)->with('telefono',$telefono);
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
        if (isset($_POST['btnActualizarSoporte'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevoApellido = $_POST['txtEditApellido'];
            $nuevoCorreo = $_POST['txtEditCorreo'];
            $nuevoTelefono = $_POST['txtEditTelefono'];
            $nuevoCambio = date("Y-m-d H:i:s");

            $affected = DB::table('usuario')
              ->where('usuariocif', $ii)
              ->update(['usuario_name' => $nuevoNombre,'usuario_apellido' => $nuevoApellido, 'usuario_correo' => $nuevoCorreo,'usuario_tel' => $nuevoTelefono, 'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('Exito. El usuario fue actualizado correctamente');
                  window.location.href='/up';
                  </script>";
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/up';
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