@extends('electronica.index')

@section('contenido')
<div class="content-busqueda">
<div class="input-group-btn busquedaj" >
    <button class="btn btn-primary" id="busqueda">
        <i class="fa fa-search"></i> Busqueda
        <input id="name" type="text" class="form-control " name="name" placeholder="Busca aqui"  required autocomplete="name" autofocus>
     </button>
</div>
</div>

<div class="titulo-reporte">
    <h1>Estados</h1>
</div>
<!-------------------------------------------------- Boton Agregar Modal ---------------------------------------------------------------->
<div class="content-agregar">
    <!-- Large modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar</button>
</div>


<!-------------------------------------------------- Formulariio Boton Agregar Modal ---------------------------------------------------------------->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!----------------------------------------------------------------------------------------------->
      
<div class="content-form">

<div class=" row col-md-13">
            <div class="card" id="card-form">
              <center>
                <div class="card-header" id="registrarse">Registro Estados</div>
              </center>
                <div class="card-body">
                    <form action = "{{route('guardarestado')}}" method = "POST">  
                    {{csrf_field()}}                    
<br>
<br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Clave estado:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco"></label>                         

                            <div class="col-md-6">
                                <input id="id_estado" type="text" class="form-control" value="{{$id_sigue}}" readonly="readonly" name="id_estado"  required autocomplete="id_estado" autofocus disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre Estado:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            

                            <div class="col-md-6">
                                <input id="nombre_estado" type="text" class="form-control" value="{{old('nombre_estado')}}" name="nombre_estado" placeholder="Escriba el nuevo estado"  required autocomplete="name" autofocus>
                            @if($errors->first('nombre_estado'))
                            <p class="text-danger">{{$errors->first('nombre_estado')}}</p>
                            @endif
                            </div>
                            

                        </div>

        


<br>
<br>
<br>
<br>
              
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                     Registrar
                                </button>
                                <input type="button" class="btn btn-outline-danger"  value="Regresar" name="Back2" onclick="history.back()"/>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<br>

      <!----------------------------------------------------------------------------------------------->

    </div>
  </div>
<br>



<!-------------------------------------------------- Mensaje ---------------------------------------------------------------->


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <center>
        <b style="font-size: 1.4em">"{{Session::get('mensaje')}}"</b>
    </center>
</div>
@endif

@if(Session::has('mensajed'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <center>
        <b style="font-size: 1.4em">"{{Session::get('mensajed')}}"</b>
    </center>
</div>
@endif

@if(Session::has('mensajedelete'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <center>
        <b style="font-size: 1.4em">"{{Session::get('mensajedelete')}}"</b>
    </center>
</div>
@endif






<!--------------------------------------------------*---------------------------------------------------------------->


<!-------------------------------------------------- Tabla de Consulta(Reporte) ---------------------------------------------------------------->




<div class="ejercicio-tabla">

        <table class="table">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Moneda</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consulta2 as $estado)
                <tr>
                    <td data-label="Clave"><span class="block-id">{{$estado->id_estado}}</span></td>
                    <td data-label="estado">{{$estado->nombre_estado}}</td>                
                    <td>
                        @if($estado->deleted_at)
                        <form id="activarestado" action="{{route('activarestado',['id_estado'=>$estado->id_estado])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-success">Activar</button>
                        </form>
                        <form id="borrarestado" action="{{route('borrarestado',['id_estado'=>$estado->id_estado])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-"><i class="fas fa-trash delete pd-seting-ed" title="Eliminar"></i></button>
                        </form>
                        @else
                        <form id="desactivarestado" action="{{route('desactivarestado',['id_estado'=>$estado->id_estado])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-warning">Desactivar</button>
                        </form>
                        @endif
                        
                        <a href="{{route('editar_estado',['id_estado'=>$estado->id_estado])}}"><button type="button submit" class="btn btn-primary"><i class="far fa-edit edit" title="Editar"></i></button></a>
                        
                    </td>
                @endforeach  
                </tr>
            </tbody>
        </table>
    </div>

<!------------------------------------------------------------*----------------------------------------------------------->
<br>
<br>
<br>




<!-----------------------------------------------------Paginacion--------------------------------------------------------->
<center>
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-secondary">1</button>
    <button type="button" class="btn btn-secondary">2</button>
    <button type="button" class="btn btn-secondary">3</button>
    <button type="button" class="btn btn-secondary">4</button>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
    <button type="button" class="btn btn-secondary">5</button>
    <button type="button" class="btn btn-secondary">6</button>
    <button type="button" class="btn btn-secondary">7</button>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary">8</button>
  </div>
</div>
</center>






<!------------------------------------------------------------------------------------------------------------------>




@stop