<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use Illuminate\Http\Request;

class SPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soport = DB::table('soporte')->get();
        return view('smiequipo')->with('soport',$soport);
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

            DB::INSERT("INSERT INTO soporte (soporte_name, soporte_apellido, soporte_mail, soporte_pass, soporte_tel, fsoportetipoid, frolesid, created_at, updated_at) VALUES(?,?,?,?,?,?,?,?,?)",[$Nombre,$Apellido,$Correo,$Contra,$Telefono,$Tipo,$Roles,$Creado,$Actual]);

            echo "<script>
            alert('Exito. El soporte fue ingresado correctamente');
            window.location.href='/sp';
            </script>";
        
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/sp';
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
        $soporte_show = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$id]);

        if ($soporte_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/sp';
                  </script>";
        } else{
            foreach($soporte_show as $soporte_queri){
                 $id = $soporte_queri->soportecif;
                $name = $soporte_queri->soporte_name;
                $apellido = $soporte_queri->soporte_apellido;
                $correo = $soporte_queri->soporte_mail;
                $telefono = $soporte_queri->soporte_tel;
                $creado = $soporte_queri->created_at;
                $modificado = $soporte_queri->updated_at;
                return view('smicuenta')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo)->with('telefono',$telefono)->with('creado',$creado)->with('modificado',$modificado);
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
        $soporte_edit = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$id]);

        if ($soporte_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/sp';
                  </script>";
        } else{
            foreach($soporte_edit as $soporte_query){
                $ii = $soporte_query->soportecif;
                $name = $soporte_query->soporte_name;
                $apellido = $soporte_query->soporte_apellido;
                $correo = $soporte_query->soporte_mail;
                $telefono = $soporte_query->soporte_tel;
                return view('seditarperfil')->with('ii',$ii)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo)->with('telefono',$telefono);
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

            $affected = DB::table('soporte')
              ->where('soportecif', $ii)
              ->update(['soporte_name' => $nuevoNombre,'soporte_apellido' => $nuevoApellido, 'soporte_mail' => $nuevoCorreo,'soporte_tel' => $nuevoTelefono, 'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('Exito. El soporte fue actualizado correctamente');
                  window.location.href='/smicuenta';
                  </script>";
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/sp';
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
