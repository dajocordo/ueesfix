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
        return view('gestion-tipo')->with('gestion_tipo', $gestionTipo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($_POST['btnEnviarGestionTipo'])) {
            $estado = new Listado();
            $estado->valor = $request->input('valor');
            $estado->grupo = "tipo_gestion";
            $estado->save();
            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect("gestion-tipo");
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/gestion-tipo/new';
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
        $gestiontipo_edit = Listado::find($id);
        if ($gestiontipo_edit) {
            return view('gestion-tipo-edit')->with('gestion_tipo', $gestiontipo_edit);
        }
        echo "<script>
                alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                window.location.href='/gestion-tipo';
            </script>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (isset($_POST['btnActualizarR'])) {
            $id = $request->input('id');
            $valor = $request->input('valor');
            $gestionTipo = Listado::find($id);
            if ($gestionTipo) {
                $gestionTipo->valor = $valor;
                $gestionTipo->save();
            }
            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/gestion-tipo';
                  </script>";
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/gestion-tipo';
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
