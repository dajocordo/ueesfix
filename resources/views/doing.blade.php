{{--| admin |--}}

@extends('building')

@section('title', 'Pendiente')

@section('content')

  @include('tool.topnav')
  
  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="todo" title="Nuevo" class="aarrooww"><</a> </div>
    <!--|==========| Pendiente | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Pendiente</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="done" title="Completado" class="aarrooww">></a> </div>
    <!--|==========| Second | ↓ |==========|-->
    <div class="second"> <p class="ppro">TKT # 4356: Caida del Campus</p> </div>
    <div class="second"> <p class="ppro">TKT # 4358: No puedo entrar a mi cuenta del campus</p> </div>
    <div class="second"> <p class="ppro">TKT # 4359: Licencia de Office Caducada</p> </div>
    <div class="second"> <p class="ppro">TKT # 4361: No puedo abrir archivo de Excel</p> </div>
    <div class="second"> <p class="ppro">TKT # 4362: Mi Class Web no funciona...</p> </div>
  </div>
  <!--|==========| Container | fin | ↑ |==========|-->
    
@endsection