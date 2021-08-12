<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function firstusuario()
    {
        if (isset($_POST['btnLoginStepIUsuario'])) {
        $esteCif = $_POST['txtCIF'];

        $valUsuario = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = (?)', [$esteCif]);

        // IF INICIO: este valida si el el CIF coincide con alguno de la base de datos
            if (!($valUsuario)) {
                echo "<script>
                     alert('CIF no existe, favor ingresar uno real');
                     window.location.href='/loginui';
                     </script>";
            } else {
                foreach($valUsuario as $queUsuario){
                $id = $queUsuario->usuariocif;
                return view('loginuii')->with('id',$id);
                }
            }
        // IF fin: este valida si el el CIF coincide con alguno de la base de datos

        } else {
            echo "<script>
                 alert('Favor completar los campos');
                 window.location.href='/loginui';
                 </script>";
        }
    }

    public function firstsoporte()
    {
        if (isset($_POST['btnLoginStepISoporte'])) {
        $esteCiff = $_POST['txtCIF'];

        $valSoporte = DB::SELECT('SELECT * FROM soporte WHERE soportecif = (?)', [$esteCiff]);

        // IF INICIO: este valida si el el CIF coincide con alguno de la base de datos
            if (!($valSoporte)) {
                echo "<script>
                     alert('CIF no existe, favor ingresar uno real');
                     window.location.href='/loginsi';
                     </script>";
            } else {
                foreach($valSoporte as $queSoporte){
                $id = $queSoporte->soportecif;
                return view('loginsii')->with('id',$id);
                }
            }
        // IF fin: este valida si el el CIF coincide con alguno de la base de datos

        } else {
            echo "<script>
                 alert('Favor completar los campos');
                 window.location.href='/loginsi';
                 </script>";
        }
    }


    public function firstadmin()
    {
        if (isset($_POST['btnLoginStepIAdmin'])) {
        $esteCifff = $_POST['txtCIF'];
        $sopoTip = 2;

        $valAdmin = DB::SELECT('SELECT * FROM soporte WHERE soportecif =  "'.$esteCifff.'" && fsoportetipoid= "'.$sopoTip.'"');

        // IF INICIO: este valida si el el CIF coincide con alguno de la base de datos
            if (!($valAdmin)) {
                echo "<script>
                     alert('CIF no existe, favor ingresar uno real');
                     window.location.href='/loginai';
                     </script>";
            } else {
                foreach($valAdmin as $queAdmin){
                $id = $queAdmin->soportecif;
                return view('loginaii')->with('id',$id)->with('sopoTip',$sopoTip);
                }
            }
        // IF fin: este valida si el el CIF coincide con alguno de la base de datos

        } else {
            echo "<script>
                 alert('Favor completar los campos');
                 window.location.href='/loginai';
                 </script>";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stepusu(Request $usucif)
    {
        if (isset($_POST['btnLoginStepIIUsuario'])) {
        $usucif = $_REQUEST['usucif'];
        $theUsrPasswd = md5($_POST['txtContra']);

        $valUsuarioyPass = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = "'.$usucif.'" && usuario_pass = "'.$theUsrPasswd.'"');

        // IF INICIO: este valida si el el CIF coincide con alguno de la base de datos
            if (!($valUsuarioyPass)) {
                echo "<script>
                     alert('La contraseña es incorrecta, favor intentarlo nuevamente');
                     window.location.href='/loginui';
                     </script>";
            } else {
                session_start();
                $_SESSION['student'] = $usucif;
            echo "<script>
                 alert('Bienvenido crack');
                 window.location.href='/inicio';
                 </script>";
            }
        // IF fin: este valida si el el CIF coincide con alguno de la base de datos

        } else {
            echo "<script>
                 alert('Favor completar los campos');
                 window.location.href='/loginuii';
                 </script>";
        }
    }

    public function stepsop(Request $sopcif)
    {
        if (isset($_POST['btnLoginStepIISoporte'])) {
        $sopcif = $_REQUEST['sopcif'];
        $theSopPasswd = md5($_POST['txtContra']);

        $valSoporteyPass = DB::SELECT('SELECT * FROM soporte WHERE soportecif = "'.$sopcif.'" && soporte_pass = "'.$theSopPasswd.'"');

        // IF INICIO: este valida si el el CIF coincide con alguno de la base de datos
            if (!($valSoporteyPass)) {
                echo "<script>
                     alert('La contraseña es incorrecta, favor intentarlo nuevamente');
                     window.location.href='/loginsi';
                     </script>";
            } else {
                session_start();
                $_SESSION['support'] = $sopcif;
            echo "<script>
                 alert('Bienvenido crack');
                 window.location.href='/dashboard';
                 </script>";
            }
        // IF fin: este valida si el el CIF coincide con alguno de la base de datos

        } else {
            echo "<script>
                 alert('Favor completar los campos');
                 window.location.href='/loginsii';
                 </script>";
        }
    }

    public function stepadm(Request $adcif)
    {
        if (isset($_POST['btnLoginStepIIAdmin'])) {
        $adcif = $_REQUEST['adcif'];
        $sopoTip = $_REQUEST['sopoTip'];
        $theAdmnPasswd = md5($_POST['txtContraa']);

        $valAdminyPass = DB::SELECT('SELECT * FROM soporte WHERE soportecif = "'.$adcif.'" && soporte_pass = "'.$theAdmnPasswd.'" && fsoportetipoid = "'.$sopoTip.'"');

        // IF INICIO: este valida si el el CIF coincide con alguno de la base de datos
            if (!($valAdminyPass)) {
                echo "<script>
                     alert('La contraseña es incorrecta, favor intentarlo nuevamente');
                     window.location.href='/loginai';
                     </script>";
            } else {
                session_start();
                $_SESSION['admin'] = $adcif;
                echo "<script>
                        alert('Bienvenido crack');
                        window.location.href='/home';
                      </script>";
            }
        // IF fin: este valida si el el CIF coincide con alguno de la base de datos

        } else {
            echo "<script>
                 alert('Favor completar los campos');
                 window.location.href='/loginaii';
                 </script>";
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
