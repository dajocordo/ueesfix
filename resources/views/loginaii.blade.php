{{--| admin |--}}

@extends('building')

@section('title', 'login')

@section('content')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/loginai') }}" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p>UEES FIX<p></div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/logina') }}" name="step-aii-login" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="adcif" value="@php echo $id; @endphp" autocomplete="off" required>
      <input type="hidden" class="form-control form-control-lg" name="sopoTip" value="@php echo $sopoTip; @endphp" autocomplete="off" required>
        <label class="lbl1">2.  Ingrese su contraseña</label>
      <div class="form-group">
        <input type="password" class="farm-cantral" name="txtContraa" autocomplete="off" required>
      </div>
      <input type="submit"  class="btn-entrur"  name="btnLoginStepIIAdmin" value="Ingresar">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->

  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>    

@endsection