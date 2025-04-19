<?php

namespace App\Http\Controllers;

use App\Models\Listado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getFacultad = Listado::where('grupo', 'facultad')->get();
        $facultad = formatLists($getFacultad);
        return view('facultad', compact('facultad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($_POST['btnEnviarFacultad'])) {
            $facultad = new Listado();
            $facultad->valor = $request->valor;
            $facultad->grupo = "facultad";
            $facultad->save();
            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect("/f");
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return redirect("/facultadnuevo");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultad_show = DB::SELECT('SELECT * FROM facultad WHERE facultadid = ?',[$id]);

        if ($facultad_show == NULL) {
            echo "<script>
                  alert('El registro ingresado no fue encontrado, favor seleccionar un registro que exista');
                  window.location.href='/f';
                  </script>";
        } else {
            foreach($facultad_show as $facultadQueri){
                $id = $facultadQueri->facultadid;
                $name = $facultadQueri->facultad_name;
                $creado = $facultadQueri->created_at;
                $modificado = $facultadQueri->updated_at;
                return view('/facultadinfo')->with('id',$id)->with('name',$name)->with('creado',$creado)->with('modificado',$modificado);
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
        $facultadEdit = Listado::find($id);
        if ($facultadEdit) { 
            return view('/facultadedita')->with('facultad', $facultadEdit);
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
        if (isset($_POST['btnActualizar'])) {
            $facultad = Listado::find($request->id);
            if ($facultad) {
                $facultad->valor = $request->valor;
                $facultad->save();
            }
            echo '<script language="javascript">';
            echo 'alert("EXITO: Los datos ya fueron actualizados")';
            echo '</script>';
            return redirect('/facultad');

        } else {
            echo '<script language="javascript">';
            echo 'alert("ERROR: favor intentarlo de nuevo")';
            echo '</script>';
            return redirect('/facultad');
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
