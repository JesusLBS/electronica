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
    <h1>Metodo de pago</h1>
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
                <div class="card-header" id="registrarse">Metodo de pago</div>
              </center>
                <div class="card-body">
                    <form action = "{{route('guardarmetodopago')}}" method = "POST">  
                    {{csrf_field()}} 
                      
<br>
<br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Clave:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco"></label>                         

                            <div class="col-md-6">
                                <input id="id_metodo_pago" type="text" class="form-control" value="{{$id_sigue}}" readonly="readonly" name="id_metodo_pago"  required autocomplete="id_metodo_pago" autofocus disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Descripción:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="metodo_pago" placeholder="Escriba el metodo de pago"  required autocomplete="name" autofocus>
                                @if($errors->first('metodo_pago'))
                            <p class="text-danger">{{$errors->first('metodo_pago')}}</p>
                            @endif
                                   
                            </div>

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
<br>

      <!----------------------------------------------------------------------------------------------->

    </div>
  </div>
<br>




<!-------------------------------------------------- Tabla de Consulta(Reporte) ---------------------------------------------------------------->




<div class="ejercicio-tabla">

        <table class="table">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Metodo de pago</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($consulta2 as $metodop)
                <tr>
                    <td data-label="Clave"><span class="block-id">{{$metodop->id_metodo_pago}}</span></td>
                    <td data-label="Metodo de pago">{{$metodop->metodo_pago}}</td>                
                    <td>
                       
                        @if($metodop->deleted_at)
                        <form id="activarmetodopago" action="{{route('activarmetodopago',['id_metodo_pago'=>$metodop->id_metodo_pago])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-success">Activar</button>
                        </form>
                        <form id="borrarmetodopago" action="{{route('borrarmetodopago',['id_metodo_pago'=>$metodop->id_metodo_pago])}}" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    
                                                    <button type="button submit" class="btn btn-"><i class="fas fa-trash delete pd-seting-ed" title="Eliminar"></i></button>
                        </form>
                        @else
                        <form id="desactivarmetodopago" action="{{route('desactivarmetodopago',['id_metodo_pago'=>$metodop->id_metodo_pago])}}" method="POST" enctype="multipart/form-data">
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