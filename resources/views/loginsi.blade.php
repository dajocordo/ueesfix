{{--| support |--}}

@extends('building')
@section('title', 'login')
@section('content')
  
  <link rel="stylesheet" type="text/css" href="/css/soportestyle.css" />

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/index') }}" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p>UEES FIX<p></div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/loginsii') }}" name="step-si-login" method="post">
      @csrf
        <label class="lbl1">1.  Ingrese su CIF</label>
      <div class="form-group">
        <input type="number" class="farm-cantral" name="txtCIF" autocomplete="off" required>
      </div>
      <input type="submit"  class="btn-entrur"  name="btnLoginStepISoporte" value="Siguiente">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  </div>

@endsection