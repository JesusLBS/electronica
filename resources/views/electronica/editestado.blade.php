@extends('electronica.editindex')

@section('contenido')
<!------------------------------------------------------------------------------------------------------------------>

 <!----------------------------------------------------------------------------------------------->
      
<div class="content-form">

<div class=" row col-md-13">
            <div class="card" id="card-form">
              <center>
                <div class="card-header" id="registrarse">Modificacion Estados</div>
              </center>
                <div class="card-body">
                    <form action = "{{route('estado.update')}}" method = "POST" >
                    @method('POST')  
                    {{csrf_field()}}                    
<br>
<br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Clave estado:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco"></label>                         

                            <div class="col-md-6">
                                <input id="id_estado" type="text" class="form-control" value="{{$dataest['id_estado']}}" readonly="readonly" name="id_estado"  required autocomplete="id_estado" autofocus >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre Estado:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            

                            <div class="col-md-6">
                                <input id="nombre_estado" type="text" class="form-control" value="{{$dataest['nombre_estado']}}" name="nombre_estado"  required autocomplete="name" autofocus>
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





<!------------------------------------------------------------------------------------------------------------------>
@stop