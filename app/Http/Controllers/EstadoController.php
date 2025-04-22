<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getEstados = Listado::where('grupo', 'estado_ticket')->get();
        $state = formatLists($getEstados);
        return view('estado', compact('state'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($_POST['btnEnviarEstado'])) {
            $estado = new Listado();
            $estado->valor = $request->valor;
            $estado->grupo = "estado_ticket";
            $estado->save();
            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect("/e");
        } else {
            echo "<script>
                  alert('Error. Vuelva a intentarlo de nuevo');
                  window.location.href='/estadonuevo';
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
            $estado_show = Listado::find($id);
            $data = formatOneListado($estado_show);
            $data->titulo = "Estado";
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
        $estado_edit = Listado::find($id);
        if ($estado_edit) { 
            return view('/estadoedit')->with('estado', $estado_edit);
        }
        echo "<script>
              alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
              window.location.href='/e';
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
            $estado = Listado::find($request->id);
            if ($estado) {
                $estado->valor = $request->valor;
                $estado->save();
            }
            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/e';
                  </script>";
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/e';
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
