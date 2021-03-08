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
    <h1>Reporte Cliente</h1>
</div>
<br>
<!-------------------------------------------------- Tabla de Consulta(Reporte) ---------------------------------------------------------------->




<div class="ejercicio-tabla">

        <table class="table">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre Cliente</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consulta2 as $pcliente)
                <tr>
                    <td data-label="Clave"><span class="block-id">{{$pcliente->id_pcliente}}</span></td>
                    
                    <td data-label="Nombre Cliente">{{$pcliente->nombre_cliente}} {{$pcliente->apellido_pcliente}} {{$pcliente->apellido_mcliente}}</td>
                    <td data-label="Email" >
                        <span class="block-email">{{$pcliente->email_cliente}}</span>
                    </td>
                    <td data-label="Estado">{{$pcliente->nombre_estado}}</td>
                    <td data-label="Telefono">{{$pcliente->celular_cliente}}</td>
                                         
                    <td> 
                        @if($pcliente->deleted_at)
                        <form id="activarpcliente" action="{{route('activarpcliente',['id_pcliente'=>$pcliente->id_pcliente])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-success">Activar</button>
                        </form>
                        <form id="borrarpcliente" action="{{route('borrarpcliente',['id_pcliente'=>$pcliente->id_pcliente])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-"><i class="fas fa-trash delete pd-seting-ed" title="Eliminar"></i></button>
                        </form>
                        @else
                        <form id="desactivarpcliente" action="{{route('desactivarpcliente',['id_pcliente'=>$pcliente->id_pcliente])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-warning">Desactivar</button>
                        </form>
                        @endif

                        
                        
                        <i class="far fa-edit edit" title="Editar"></i>
                    </td>
                    
                </tr>
                @endforeach
        
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