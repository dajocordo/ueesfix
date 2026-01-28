<?php

namespace App\Http\Controllers;

use App\Application\Carrera\UseCases\ActualizarCarreraUseCase;
use App\Application\Carrera\UseCases\CrearCarreraUseCase;
use App\Application\Carrera\UseCases\EliminarCarreraUseCase;
use App\Application\Carrera\UseCases\ListarCarrerasUseCase;
use App\Application\Carrera\UseCases\ObtenerCarreraUseCase;
use App\Models\Listado;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * Controlador refactorizado con DDD
 * Responsabilidad: Solo orquestar requests/responses
 * La lógica de negocio está en el dominio y los casos de uso
 */
class CarreraController extends Controller
{
    public function __construct(
        private CrearCarreraUseCase $crearCarrera,
        private ListarCarrerasUseCase $listarCarreras,
        private ObtenerCarreraUseCase $obtenerCarrera,
        private ActualizarCarreraUseCase $actualizarCarrera,
        private EliminarCarreraUseCase $eliminarCarrera,
    ) {}

    /**
     * Listar todas las carreras
     */
    public function index()
    {
        try {
            $carreras = $this->listarCarreras->ejecutar();
            return view('carreras')->with('carrera', $carreras);
        } catch (\Exception $e) {
            Log::error('Error al listar carreras: ' . $e->getMessage());
            return back()->withErrors('Error al cargar las carreras');
        }
    }

    /**
     * Mostrar formulario para crear nueva carrera
     */
    public function newcarreer()
    {
        $facultades = Listado::where('grupo', 'facultad')->get();
        return view('carreranueva')->with('facultad', $facultades);
    }

    /**
     * Guardar nueva carrera
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'valor' => 'required|string|max:255',
                'facultad' => 'required|integer|exists:listados,id',
            ]);

            $this->crearCarrera->ejecutar(
                nombre: $validated['valor'],
                facultadId: $validated['facultad']
            );

            return redirect('/c')
                ->with('success', 'La carrera ha sido creada correctamente');
        } catch (\InvalidArgumentException $e) {
            return back()->withErrors($e->getMessage())->withInput();
        } catch (\Exception $e) {
            Log::error('Error al crear carrera: ' . $e->getMessage());
            return back()->withErrors('Error al crear la carrera')->withInput();
        }
    }

    /**
     * Obtener carrera por ID (API)
     */
    public function show($id): JsonResponse
    {
        try {
            $data = $this->obtenerCarrera->ejecutar($id);

            if (!$data) {
                return response()->json([
                    'success' => false,
                    'message' => 'Carrera no encontrada'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => array_merge($data, ['titulo' => 'Carrera']),
                'message' => 'Datos obtenidos exitosamente'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error al obtener carrera: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener los datos'
            ], 400);
        }
    }

    /**
     * Mostrar formulario para editar carrera
     */
    public function edit($id)
    {
        try {
            $carrera = $this->obtenerCarrera->ejecutar($id);

            if (!$carrera) {
                return back()->withErrors('Carrera no encontrada');
            }

            $facultades = Listado::where('grupo', 'facultad')->get();
            return view('carreraedit', [
                'carrera' => $carrera,
                'facultad' => $facultades
            ]);
        } catch (\Exception $e) {
            Log::error('Error al editar carrera: ' . $e->getMessage());
            return back()->withErrors('Error al cargar la carrera');
        }
    }

    /**
     * Actualizar carrera existente
     */
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'required|integer|exists:listados,id',
                'valor' => 'required|string|max:255',
                'facultad' => 'required|integer|exists:listados,id',
            ]);

            $this->actualizarCarrera->ejecutar(
                id: $validated['id'],
                nombre: $validated['valor'],
                facultadId: $validated['facultad']
            );

            return redirect('/carrera')
                ->with('success', 'Los datos ya fueron actualizados');
        } catch (\InvalidArgumentException $e) {
            return back()->withErrors($e->getMessage())->withInput();
        } catch (\Exception $e) {
            Log::error('Error al actualizar carrera: ' . $e->getMessage());
            return back()->withErrors('Error al actualizar la carrera')->withInput();
        }
    }

    /**
     * Eliminar una carrera
     */
    public function destroy($id)
    {
        try {
            $this->eliminarCarrera->ejecutar($id);

            return redirect('/carrera')
                ->with('success', 'La carrera fue eliminada correctamente');
        } catch (\Exception $e) {
            Log::error('Error al eliminar carrera: ' . $e->getMessage());
            return back()->withErrors('Error al eliminar la carrera');
        }
    }
}
