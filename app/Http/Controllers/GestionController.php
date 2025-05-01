<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getGestion = Listado::where('grupo', 'gestion')->get();
        $gestion = formatLists($getGestion);
        return view('gestion')->with('gestion', $gestion);
    }

    public function newgestion(){
        $getGestion = Listado::where('grupo', 'gestion_tipo')->get();
        return view('gestionnueva')->with('gestiontipooid', $getGestion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($_POST['btnEnviarGestion'])) {
            $gestion = new Listado();
            $gestion->valor = $request->input('valor');
            $gestion->grupo = 'gestion';
            $gestion->save();
            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect("gestion");
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/gestionnuevo';
                  </script>";
        }
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
            $gestion_show = Listado::find($id);
            $data = formatOneListado($gestion_show);
            $data->titulo = "Gestion";
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
        $gestion_edit = DB::SELECT('SELECT * FROM gestion WHERE gestionid = ?',[$id]);

        if ($gestion_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/g';
                  </script>";
        } else{
            foreach($gestion_edit as $gestion_query){
                $ii = $gestion_query->gestionid;
                $name = $gestion_query->gestion_name;    
                return view('/gestionedit')->with('ii',$ii)->with('name',$name);
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
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevoCambio = date("Y-m-d H:i:s");

            $affected = DB::table('gestion')
              ->where('gestionid', $ii)
              ->update(['gestion_name' => $nuevoNombre,'updated_at' => $nuevoCambio]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/g';
                  </script>";
  
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/g';
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