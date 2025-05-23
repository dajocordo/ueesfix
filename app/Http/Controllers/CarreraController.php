<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCarrera = Listado::where('grupo', 'carrera')->get();
        $carrera = formatLists($getCarrera);
        return view('carreras')->with('carrera', $carrera);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($_POST['btnEnviarCarrera'])) {
            $carrera = new Listado();
            $carrera->valor = $request->valor;
            $carrera->id_origin = $request->facultad;
            $carrera->grupo = "carrera";
            $carrera->save();
            echo "<script>
                  alert('EXITO. La Carrera ha sido creado correctamente');
                  window.location.href='/c';
                  </script>";
        } else {
            echo "<script>
                  alert('Hubo un error, favor intentarlo de nuevo');
                  window.location.href='/c';
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
            $carrera_show = Listado::find($id);
            $data = formatOneListado($carrera_show);
            $data->titulo = "Carrera";
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
        $carrera = Listado::find($id);
        if ($carrera) {
            $getLists = Listado::where('grupo', 'facultad')->get();
            $facultad = formatLists($getLists);
            return view('carreraedit', compact('carrera', 'facultad'));
        }
        echo "<script>
              alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
              window.location.href='/c';
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
        if (isset($_POST['btnActualizar'])) {
            $id = $request->input('id');
            $valor = $request->input('valor');
            $id_origin = $request->input('facultad');
            $carrera = Listado::find($id);
            if ($carrera) {
                $carrera->id_origin = $id_origin;
                $carrera->valor = $valor;
                $carrera->save();
            }
            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/carrera';
                  </script>";
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/carrera';
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

    public function newcarreer()
    {
        $getLists = Listado::where('grupo', 'facultad')->get();
        $facultad = formatLists($getLists);
        return view('carreranueva')->with('facultad', $facultad);
    }

}
