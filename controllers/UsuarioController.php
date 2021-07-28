<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $users = DB::table('usuario')->get();
        return view('usuarios')->with('users',$users);

        // foreach ($users as $user) {
        //     $nombreu = $user->unombre;
        //     $apellidou = $user->upellido;
        //     $correou = $user->umail;
        //     // echo "<br><h4>${nombreu}</h4><br>";
        //     // echo "<br><h4>${apellidou}</h4><br>";
        //     // echo "<br><h4>${correou}</h4><br>";
        //     return view('todo')->with('nombreu',$nombreu)->with('apellidou',$apellidou)->with('correou',$correou);
        // }
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

        if (isset($_POST['btnCrearUsuario'])) {

            $Nombre = $_POST['txtNombre'];
            $Apellido = $_POST['txtApellido'];
            $Correo = $_POST['txtCorreo'];
            $Contra = $_POST['txtPassword'];
            $Tipo = $_POST['selTipoUsuario'];
            $Facultad = $_POST['selFacultad'];
            $Carrera = $_POST['selCarrera'];
            $Creado = date("Y-m-d H:i:s");
            $Actual = date("Y-m-d H:i:s");

            DB::INSERT("INSERT INTO usuario (unombre, uapellido, umail, upassword, usuariotti, facultadtti, carreratti, created_at, updated_at) VALUES(?,?,?,?,?,?,?,?,?)",[$Nombre,$Apellido,$Correo,$Contra,$Tipo,$Facultad,$Carrera,$Creado,$Actual]);

            echo '<script language="javascript">';
            echo 'alert("Datos ingresados correctamente")';
            echo '</script>';
            return redirect('/u');
        
        } else {
            echo '<script language="javascript">';
            echo 'alert("Hubo un error, favor intentarlo de nuevo")';
            echo '</script>';
            return redirect('/usuarionuevo');
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
    //     if (isset($_POST['btnEnviar'])) {

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

    /**Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $id = $_REQUEST['id'];
        $resul = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        foreach($resul as $quer){
            $name = $quer->unombre;
            $apellido = $quer->uapellido;
            $correo = $quer->umail;
            return view('usuarioinfo')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
        }

        // $tipous = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        // foreach($resul as $quer){
        //     $name = $quer->unombre;
        //     $apellido = $quer->uapellido;
        //     $correo = $quer->umail;
        //     return view('usuarioinfo')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
        // }

    }

    /**Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$id]);

        foreach($result as $query){
            $ii = $query->usuariocif;
            $name = $query->unombre;
            $apellido = $query->uapellido;
            $correo = $query->umail;
            return view('usuarioedita')->with('ii',$ii)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
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
            $nuevoApellido = $_POST['txtEditApellido'];
            $nuevoCorreo = $_POST['txtEditCorreo'];

            $affected = DB::table('usuario')
              ->where('usuariocif', $ii)
              ->update(['unombre' => $nuevoNombre,'uapellido' => $nuevoApellido,'umail' => $nuevoCorreo]);

            echo '<script language="javascript">';
            echo 'alert("EXITO: Los datos ya fueron actualizados")';
            echo '</script>';
            return direct('/u');
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

    public function selectii()
    {

    $usertypee = DB::table('usuariotipo')->get();
    $facultaad = DB::table('facultad')->get();
    $carreraa = DB::table('carrera')->get();
    return view('usuarionuevo')->with('usertypee',$usertypee)->with('facultaad',$facultaad)->with('carreraa',$carreraa);


    // $data = DB::table('city')
    //        ->join('state', 'state.state_id', '=', 'city.state_id')
    //        ->join('country', 'country.country_id', '=', 'state.country_id')
    //        ->select('country.country_name', 'state.state_name', 'city.city_name')
    //        ->get();
    //      return view('join_table', compact('data'));

    // $data = DB::table('usuario')
    //     ->join('facultad', 'facultad.facultadid', '=', 'usuario.facultadtti')
    //     ->join('carrera', 'carrera.carreraid', '=', 'usuario.carreratti')
    //     ->select('carrera.carrera_name', 'facultad.facultad_name', 'usuario.usuariocif')
    //     ->get();
    //     return view('u/create', compact('data'));

    // $data = DB::table('usuario')
    // ->join('facultad', 'facultad.facultadid', '=', 'usuario.facultadtti')
    // ->join('carrera', 'carrera.carreraid', '=', 'usuario.carreratti')
    // ->select('carrera.carrera_name', 'facultad.facultad_name', 'usuario.usuariocif')
    // ->get();
    // return view('usuarionuevo') ->with('data',$data);

    // $data = DB::table('usuario')
    //     ->join('usuariotipo', 'usuariotipo.usuariotipoid', '=', 'usuario.usuariotti')
    //     ->select('carrera.carrera_name', 'usuariotipo.usuariotipo_name', 'usuario.facultad_name')
    //    ->get();
    //  return view('join_table', compact('data'));


    // $users = DB::table('usuario')->get();
    // return view('usuarios')->with('users',$users);

    // foreach ($users as $user) {
    //     $id = $user->id;
    //     $nombreu = $user->unombre;
    //     $apellidou = $user->upellido;
    //     $correou = $user->umail;

    //     echo $nombreu; 
    //     echo $apellidou;
    //     echo $correou; 
    // }

    // $data = usuario::join("usuariotipo", function ($join) {
    //     $join->on("usuariotipo.usuariotti", "=", "usuariotipoid");
    // })->get();
  
    // $tipojoin = DB::table('usuariotipo')
    //             ->select('usuariotipo_name')
    //             ->join('usuario', 'usuario.usuariotti', '=', 'usuariotipo.usuariotipoid')
    //             ->where('usuario.unombre', $siuu)
    //             ->get();

    // $resul = DB::SELECT("SELECT (usuariotipo_name) FROM usuariotipo JOIN usuario ON 'usuariotipo.usuariotipoid' = 'usuario.usuariotti'");

    // foreach($resul as $quer){
    //     $name = $quer->usuariotipo_name;
    //     echo $name;
        // $apellido = $quer->uapellido;
        // $correo = $quer->umail;
        // return view('infousuario')->with('id',$id)->with('name',$name)->with('apellido',$apellido)->with('correo',$correo);
    // }

    // return $siuu;

    // DB::table('usuariotipo')
    //         ->join('usuario', function ($join) {
    //             $join->on('usuariotipo.usuariotti', '=', 'usuario.usuariotti')
    //                  ->where('usuario.usuariotti', '=', 5);
    //         })
    //         ->get();

    // $tipojoin = DB::table('leagues')
    //             ->select('league_name')
    //             ->join('countries', 'countries.country_id', '=', 'leagues.country_id')
    //             ->where('countries.country_name', $country)
    //             ->get();
    //OR
  
    //$data = Employee::join("projects", "projects.employee_id", "=", "employees.id")->get();

    /* Get Last Executed Query */
    // $query = Employee::join("projects", function ($join) {
    //     $join->on("projects.employee_id", "=", "employees.id");
    // })->toSql();

    // echo $query;

    // echo "<pre>";
    // print_r ($data);
    }

}