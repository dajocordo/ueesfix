{{--| usuario |--}}

@extends('building')
@section('title', 'login')
@section('content')

  <link rel="stylesheet" type="text/css" href="/css/usuariostyle.css"> 

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/loginui') }}" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p>UEES FIX<p></div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/loginu') }}" name="step-uii-login" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="usucif" value="@php echo $id; @endphp" autocomplete="off" required>
        <label class="lbl1">2.  Ingrese su contraseña</label>
      <div class="form-group">
        <input type="password" class="farm-cantral" name="txtContra" autocomplete="off" required>
      </div>
      <input type="submit"  class="btn-entrur"  name="btnLoginStepIIUsuario" value="Ingresar">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->

  </div>    

@endsection