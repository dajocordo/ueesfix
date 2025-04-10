{{--| admin |--}}

@extends('building')

@section('title', 'Carreras')

@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Carreras</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/carreranueva" title="Nuevo" class="aarrooww">+</a> </div>
    <!--|==========| Tabla Carreras | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Carrera</th>
        <th>Facultad</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php foreach ($race as $rac) {
            $id = $rac->carreraid;
            $nombrec = $rac->carrera_name;
            $fechaActual = $rac->updated_at;
            $facultadid = $rac->ffacultadid;
            $facultad_in_carrera = DB::SELECT('SELECT * FROM facultad WHERE facultadid = ?',[$facultadid]);

            foreach($facultad_in_carrera as $facultad_in_carrera_queri){
                $fid = $facultad_in_carrera_queri->facultadid;
                $nombref = $facultad_in_carrera_queri->facultad_name;
      @endphp
      <tbody><td>@php echo $id; @endphp</td>
        <td>@php echo $nombrec; @endphp</td>
      <td>@php echo $nombref; @endphp</td>
        <td><a class="optionsu" href="/c/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/c/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/c/delete"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } } @endphp  
    </table> <!--|==========| Tabla Carreras | ↑ | fin |==========|-->
  </div><!--|==========| Container | fin | ↑ |==========|-->


@endsection