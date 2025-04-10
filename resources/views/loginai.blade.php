{{--| admin |--}}

@extends('building')

@section('title', 'home')

@section('content')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/index') }}" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p>UEES FIX<p></div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/loginaii') }}" name="step-ai-login" method="post">
      @csrf
        <label class="lbl1">1.  Ingrese su CIF</label>
      <div class="form-group">
        <input type="number" class="farm-cantral" name="txtCIF" autocomplete="off" required>
      </div>
      <input type="submit"  class="btn-entrur"  name="btnLoginStepIAdmin" value="Siguiente">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->

  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>    

@endsection