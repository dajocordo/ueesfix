<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCarrera = Listado::where('grupo', 'carreras')->get();
        $carrera = formatLists($getCarrera);
        return view('carreras')->with('carrera', $carrera);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST['btnEnviarCarrera'])) {

            $NombreCarrera = $_POST['txtNombreCarrera'];
            $Facultad = $_POST['selFacultad'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO carrera (carrera_name, ffacultadid, created_at, updated_at) VALUES(?,?,?,?)",[$NombreCarrera,$Facultad,$Creado,$Actual]);

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
        $carrera_show = DB::SELECT('SELECT * FROM carrera WHERE carreraid = ?',[$id]);
        
        if ($carrera_show == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/g';
                  </script>";
        } else{
            foreach($carrera_show as $carrera_queri){
                $carreraid = $carrera_queri->carreraid;
                $cname = $carrera_queri->carrera_name;
                $facultadid = $carrera_queri->ffacultadid;
                $creado = $carrera_queri->created_at;
                $modificado = $carrera_queri->updated_at;
                $facultad_in_carrera = DB::SELECT('SELECT * FROM facultad WHERE facultadid = ?',[$facultadid]);

                foreach($facultad_in_carrera as $facultad_in_carrera_queri){
                    $fid = $facultad_in_carrera_queri->facultadid;
                    $fname = $facultad_in_carrera_queri->facultad_name;
                    return view('carrerainfo')->with('carreraid',$carreraid)->with('cname',$cname)->with('fname',$fname)->with('creado',$creado)->with('modificado',$modificado);
                }
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
        $carrera_edit = DB::SELECT('SELECT * FROM carrera WHERE carreraid = ?',[$id]);

        if ($carrera_edit == null) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/c';
                  </script>";
        } else{
            foreach($carrera_edit as $carrera_query){
                $ii = $carrera_query->carreraid;
                $name = $carrera_query->carrera_name;
                $facultadid = $carrera_query->ffacultadid;
                $facultadSelectt = DB::SELECT('SELECT * FROM facultad WHERE facultadid = ?',[$facultadid]);
                $facultad_diferent = DB::SELECT('SELECT * FROM facultad WHERE facultadid != ?',[$facultadid]);
                
                foreach($facultadSelectt as $facultad_in_carrera_query){
                    $facuid = $facultad_in_carrera_query->facultadid;
                    $facuname = $facultad_in_carrera_query->facultad_name;

                    return view('carreraedit')->with('ii',$ii)->with('name',$name)->with('facuid',$facuid)->with('facuname',$facuname)->with('facultad_diferent',$facultad_diferent);
                }
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
        if (isset($_POST['btnActualizar'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $nuevaFacultad = $_POST['selFacultadCa'];
            $Actual = date("Y-m-d H:i:s");

            $affected = DB::table('carrera')
              ->where('carreraid', $ii)
              ->update(['carrera_name' => $nuevoNombre,'ffacultadid' => $nuevaFacultad,'updated_at' => $Actual]);

            echo "<script>
                  alert('EXITO: Los datos ya fueron actualizados');
                  window.location.href='/c';
                  </script>";
            
        } else {
            echo "<script>
                  alert('ERROR: favor intentarlo de nuevo');
                  window.location.href='/c';
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

    public function newcarreer(){
        $facultaad = DB::table('facultad')->get();
        return view('carreranueva')->with('facultaad',$facultaad);
    }

}
