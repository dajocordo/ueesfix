<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $race = DB::table('carrera')->get();
        return view('carreras')->with('race',$race);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('contact');
        // dd($request->all());

        if (isset($_POST['btnEnviarCarrera'])) {

            $NombreCarrera = $_POST['txtNombreCarrera'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO carrera (carrera_name, created_at, updated_at) VALUES(?,?,?)",[$NombreCarrera,$Creado,$Actual]);

            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect('/c');
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return redirect('/carreranueva');
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
            //         $addUser = new addUser();
    //         $addUser->txtNombre = $request->get('txtNombre');
    //         $addUser->txtApellido = $request->get('txtApellido');
    //         $addUser->txtCorreo = $request->get('txtCorreo');
    //         $addUser->txtPassword = $request->get('txtPassword');
    //         $addUser->save();

    //         DB::INSERT("INSERT INTO USSERS (unombre, upellido, umail, upassword) VALUES(?,?,?,?)",[$addUser->txtNombre,$addUser->txtApellido,$addUser->txtCorreo,$Contra]);

    //         echo '<script language="javascript">';
    //         echo 'alert("Datos ingresados correctamente")';
    //         echo '</script>';
    //         return view("../home");
        
    //     } else {
    //         echo '<script language="javascript">';
    //         echo 'alert("Hubo un error, favor intentarlo de nuevo")';
    //         echo '</script>';
    //         return view("../nuevousuario");
    //     }
    // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $id = $_REQUEST['id'];
        $resul = DB::SELECT('SELECT * FROM carrera WHERE carreraid = ?',[$id]);

        foreach($resul as $quer){
            $id = $quer->carreraid;
            $name = $quer->carrera_name;
            $creado1 = $quer->created_at;
            $actual1 = $quer->updated_at;
            return view('carrerainfo')->with('id',$id)->with('name',$name)->with('creado1',$creado1)->with('actual1',$actual1);
        }

        // $tipous = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        // foreach($resul as $quer){
        //     $name = $quer->unombre;
        //     $apellido = $quer->uapellido;
        //     $correo = $quer->umail;
        //     return view('usuarioinfo')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = DB::SELECT('SELECT * FROM carrera WHERE carreraid = ?',[$id]);

        foreach($result as $query){
            $ii = $query->carreraid;
            $name = $query->carrera_name;

            return view('carreraedita')->with('ii',$ii)->with('name',$name);
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
        if (isset($_POST['btnActualizar'])) {
            $ii = $_REQUEST['ii'];
            $nuevoNombre = $_POST['txtEditNombre'];
            $Actual = date("Y-m-d H:i:s");

            $affected = DB::table('carrera')
              ->where('carreraid', $ii)
              ->update(['carrera_name' => $nuevoNombre,'updated_at' => $Actual]);

            echo '<script language="javascript">';
            echo 'alert("EXITO: Los datos ya fueron actualizados")';
            echo '</script>';
            return redirect('/carreras');
            // return redirect('/dale')->with('var');

            // DB::UPDATE('UPDATE USSERS SET unombre=?, upellido=?, umail=? WHERE id = ?',[$nuevoNombre],[$nuevoApellido],[$nuevoCorreo],[$ii]);

            // DB::UPDATE("UPDATE USSERS SET unombre='${nuevoNombre}', upellido='${nuevoApellido}',umail='${nuevoCorreo}' WHERE id=${io}");
            
        } else {
            echo '<script language="javascript">';
            echo 'alert("ERROR: favor intentarlo de nuevo")';
            echo '</script>';
            return view('/usuarios');
            // return redirect('/dale')->with('var');

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
