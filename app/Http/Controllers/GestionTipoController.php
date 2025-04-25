<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class GestionTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getGestionTipo = Listado::where('grupo', 'tipo_gestion')->get();
        $gestionTipo = formatLists($getGestionTipo);
        return view('gestiontipo')->with('gestion_tipo', $gestionTipo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarGestionTipo'])) {

            $NombreGestionTipo = $_POST['txtNombreGestionTipo'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO gestiontipo (gestiontipo_name, created_at, updated_at) VALUES(?,?,?)",[$NombreGestionTipo,$Creado,$Actual]);

            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect("/gt");
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return redirect("/gestiontiponuevo");
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
    public function show($id): JsonResponse
    {
        try {
            $gestiontipo_show = Listado::find($id);
            $data = formatOneListado($gestiontipo_show);
            $data->titulo = "Gestion Tipo";
            return responseOK($data, 200, "Datos obtenidos exitosamente");
        } catch(Throwable $e) {
            return responseError("Error al obtener los datos", 400);
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
        $gestiontipo_edit = DB::SELECT('SELECT * FROM gestiontipo WHERE gestiontipoid = ?',[$id]);

        if ($gestiontipo_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/gt';
                  </script>";
        } else{
            foreach($gestiontipo_edit as $gestiontipo_query){
                $ii = $gestiontipo_query->gestiontipoid;
                $name = $gestiontipo_query->gestiontipo_name;    
                return view('/gestiontipoedit')->with('ii',$ii)->with('name',$name);
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
    public function update(Request $id)
    {
        if (isset($_POST['btnActualizarR'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevoCambio = date("Y-m-d H:i:s");

            $affected = DB::table('gestiontipo')
              ->where('gestiontipoid', $ii)
              ->update(['gestiontipo_name' => $nuevoNombre,'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/gt';
                  </script>";
  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/gt';
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
