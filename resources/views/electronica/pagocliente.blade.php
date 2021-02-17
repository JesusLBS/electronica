@extends('electronica.index')

@section('contenido')
<div class="">
    <h2>Pago</h2>
</div>
<hr>
<div class="titulo-reporte">
    <h1>¿A dónde enviar el pedido? </h1>
</div>
<!------------------------------------------------------------*-----------------------------------------------------------> 
<br>
<div class="ejercicio-form">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <center>
                <div class="card-header" id="registrarse">Ingresa tu nombre y dirección:</div>
              </center>
                <div class="card-body">
                  <form action = "{{route('guardarcliente')}}" method = "POST">  
                    {{csrf_field()}}
                    <div class="well">
                      <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre:
                    <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('nombre'))
                      <p class="text-danger">{{$errors->first('nombre')}}</p>
                      @endif
                    </label>
                <input type="text" name="nombre_cliente" id="nombre"  value="{{old('nombre')}}" class="form-control" placeholder="Nombre" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="apellido">Apellido Paterno:
                    <label for="apellido_paterno" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('apellido_paterno'))
                      <p class="text-danger">{{$errors->first('apellido_paterno')}}</p>
                      @endif
                    </label>
                    <input type="text" name="apellido_pcliente" id="apellido_paterno" value="{{old('apellido_paterno')}}" class="form-control" placeholder="Apellido Paterno" tabindex="2">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="apellido">Apellido Materno:
                    <label for="apellido_materno" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('apellido_materno'))
                      <p class="text-danger">{{$errors->first('apellido_materno')}}</p>
                      @endif
                    </label>
                    <input type="text" name="apellido_mcliente" id="apellido_materno" value="{{old('apellido_materno')}}" class="form-control" placeholder="Apellido Materno" tabindex="2">
                </div>
            </div>
        </div>

        <div class="form-group">
                    <label for="apellido">Direccion:
                    <label for="direccion" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('direccion'))
                      <p class="text-danger">{{$errors->first('direccion')}}</p>
                      @endif
                    </label>
                    <input type="text" name="direccion_cliente" id="direccion" value="{{old('direccion')}}" class="form-control" placeholder="direccion" tabindex="2">
          </div> 

        <div class="form-group">
          <label for="dni">Departamento,suite,codigo de accseso(opc.):

          </label>
          <input type="text" name="departamento_cliente" id="departamento" value="{{old('departamento')}}" class="form-control" placeholder="Departamento,suite,codigo de accseso(opc.):" tabindex="5">
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="colonia">Colonia:
                      <label for="colonia" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('colonia'))
                      <p class="text-danger">{{$errors->first('colonia')}}</p>
                      @endif
                    </label>
                <input type="text" name="colonia_cliente" id="colonia"  value="{{old('colonia')}}" class="form-control" placeholder="Colonia" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="apellido">ciudad:
                      <label for="ciudad" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('ciudad'))
                      <p class="text-danger">{{$errors->first('ciudad')}}</p>
                      @endif
                    </label>
                    <input type="text" name="ciudad_cliente" id="ciudad" value="{{old('ciudad')}}" class="form-control" placeholder="Ciudad" tabindex="2">
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <label for="dni">Seleccione Estado:
                  
                </label>
                <select name = 'id_estado' class="custom-select">
                  <option selected="">Selecciona un departamento</option>
                  <option value="1">Morelos</option>
                  <option value="2">Estado de Mexico</option>
                  <option value="3">Puebla</option>
                </select>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="codigo_postal">Codigo Postal:
                      <label for="codigo_postal" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('codigo_postal'))
                      <p class="text-danger">{{$errors->first('codigo_postal')}}</p>
                      @endif
                    </label>
                    <input type="text" name="codigo_postalcliente" id="codigo_postal" value="{{old('codigo_postal')}}" class="form-control" placeholder="Codigo Postal" tabindex="2">
                </div>
            </div>
          </div>


          <div class="sub-titulo">
          <b>¿Cuál es tu información de contacto?:</b>
          </div> 
          <hr>



        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="email">Email:
                      <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('email'))
                      <p class="text-danger">{{$errors->first('email')}}</p>
                      @endif
                    </label>
                    <input type="email" name="email_cliente" id="email"  value="{{old('email')}}" class="form-control" placeholder="Email" tabindex="4">
                    <i class="far fa-envelope"></i>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="celular">Celular:
                      <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('celular'))
                      <p class="text-danger">{{$errors->first('celular')}}</p>
                      @endif
                    </label>
                    <input type="text" name="celular_cliente" id="celular" value="{{old('celular')}}"  class="form-control" placeholder="Celular" tabindex="3">
                    <i class="fas fa-mobile-alt"></i>
                </div>
            </div>

        </div>
        <div class="sub-titulo">
                            <b>Forma de pago:</b>
                        </div> 
                        <hr>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4"> 
                                <label class="radio-inline"><input type="radio" name="role_id" value="1" checked>Tarjeta de crédito</label>
                                <label class="radio-inline"><input type="radio" name="role_id" value="2">Efectivo</label>
                                <label class="radio-inline"><input type="radio" name="role_id" value="3">Monedero electrónico</label>
                                <label class="radio-inline"><input type="radio" name="role_id" value="4">Pay pal</label>
                            </div>
                        </div>
                        <hr>


                        <div class="panel panel-default" >
 <div class="panel-heading">
     
      <div class="form-group row ">
              <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Ingrese numero de tarjeta" />
              </div>
          </div>
     <div class="form-group row ">
              <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >Mes Expiracion</span>
                  <input type="text" class="form-control" placeholder="MM" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >Año Expiracion</span>
                  <input type="text" class="form-control" placeholder="YY" />
              </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >  CCV</span>
                  <input type="text" class="form-control" placeholder="CCV" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">

         </div>
          </div>
     <div class="form-group row ">
              <div class="col-md-12 pad-adjust">

                  <input type="text" class="form-control" placeholder="Nombre de la tarjeta" />
              </div>
          </div>
     <div class="form-group row">

     </div>

     
                   </div>
              </div>

                        
    </div>


              
                        
                        <div class="form-group row mb-0 ">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="button" class="btn btn-outline-danger font-weight-bold">
                                     Cancelar
                                </button>
                                <input type="submit" class="btn btn-outline-warning font-weight-bold"  value="Pagar Ahora"/>
                            </div>
                        </div>
        
</form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<br>
<br>

<br>
<br>
<br>
<br><br>













<!------------------------------------------------------------------------------------------------------------------>




@stop