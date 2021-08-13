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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
                $name = $soporte_query->snombre;
                $apellido = $soporte_query->sapellido;
                $correo = $soporte_query->smail;
                $telefono = $soporte_query->stelefono;
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
              ->update(['snombre' => $nuevoNombre,'sapellido' => $nuevoApellido, 'smail' => $nuevoCorreo,'stelefono' => $nuevoTelefono, 'updated_at' => $nuevoCambio]);

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
