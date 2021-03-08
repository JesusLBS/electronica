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
                    <label for="id_pcliente">Su clave es:
                     
                    </label>
                    <input type="text" name="id_pcliente" id="id_pcliente" value="{{$id_sigue}}" readonly="readonly" class="form-control" disabled>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="nombre_cliente">Nombre:
                    <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('nombre_cliente'))
                      <p class="text-danger">{{$errors->first('nombre_cliente')}}</p>
                      @endif
                    </label>
                <input type="text" name="nombre_cliente" id="nombre_cliente"  value="{{old('nombre_cliente')}}" class="form-control" placeholder="Nombre" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="apellido_pcliente">Apellido Paterno:
                    <label for="apellido_pcliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('apellido_pcliente'))
                      <p class="text-danger">{{$errors->first('apellido_pcliente')}}</p>
                      @endif
                    </label>
                    <input type="text" name="apellido_pcliente" id="apellido_pcliente" value="{{old('apellido_pcliente')}}" class="form-control" placeholder="Apellido Paterno" tabindex="2">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="apellido_mcliente">Apellido Materno:
                    <label for="apellido_mcliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('apellido_mcliente'))
                      <p class="text-danger">{{$errors->first('apellido_mcliente')}}</p>
                      @endif
                    </label>
                    <input type="text" name="apellido_mcliente" id="apellido_mcliente" value="{{old('apellido_mcliente')}}" class="form-control" placeholder="Apellido Materno" tabindex="2">
                </div>
            </div>
        </div>

        <div class="form-group">
                    <label for="apellido">Direccion:
                    <label for="direccion_cliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('direccion_cliente'))
                      <p class="text-danger">{{$errors->first('direccion_cliente')}}</p>
                      @endif
                    </label>
                    <input type="text" name="direccion_cliente" id="direccion_cliente" value="{{old('direccion_cliente')}}" class="form-control" placeholder="Direccion" tabindex="2">
          </div> 

        <div class="form-group">
          <label for="dni">Departamento,suite,codigo de accseso(opc.):

          </label>
          <input type="text" name="departamento_cliente" id="departamento_cliente" value="{{old('departamento_cliente')}}" class="form-control" placeholder="Departamento,suite,codigo de accseso(opc.):" tabindex="5">
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="colonia_cliente">Colonia:
                      <label for="colonia_cliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('colonia_cliente'))
                      <p class="text-danger">{{$errors->first('colonia_cliente')}}</p>
                      @endif
                    </label>
                <input type="text" name="colonia_cliente" id="colonia_cliente"  value="{{old('colonia_cliente')}}" class="form-control" placeholder="Colonia" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="apellido">Ciudad:
                      <label for="ciudad_cliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('ciudad_cliente'))
                      <p class="text-danger">{{$errors->first('ciudad_cliente')}}</p>
                      @endif
                    </label>
                    <input type="text" name="ciudad_cliente" id="ciudad_cliente" value="{{old('ciudad_cliente')}}" class="form-control" placeholder="Ciudad" tabindex="2">
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <label for="dni">Seleccione Estado:
                  
                </label>
                <select name = 'id_estado' class="custom-select">
                  <option selected="">Selecciona un Estado</option>
                  @foreach($estados as $est)
                  <option value="{{$est->id_estado}}">{{$est->nombre_estado}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="codigo_postalcliente">Codigo Postal:
                      <label for="codigo_postalcliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('codigo_postalcliente'))
                      <p class="text-danger">{{$errors->first('codigo_postalcliente')}}</p>
                      @endif
                    </label>
                    <input type="text" name="codigo_postalcliente" id="codigo_postalcliente" value="{{old('codigo_postalcliente')}}" class="form-control" placeholder="Codigo Postal" tabindex="2">
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
                      <label for="email_cliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('email_cliente'))
                      <p class="text-danger">{{$errors->first('email_cliente')}}</p>
                      @endif
                    </label>
                    <input type="email" name="email_cliente" id="email_cliente"  value="{{old('email_cliente')}}" class="form-control" placeholder="Email" tabindex="4">
                    <i class="far fa-envelope"></i>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="celular_cliente">Celular:
                      <label for="celular_cliente" class="col-md-1 col-form-label text-md-right asterisco">*</label>
                      @if($errors->first('celular_cliente'))
                      <p class="text-danger">{{$errors->first('celular_cliente')}}</p>
                      @endif
                    </label>
                    <input type="text" name="celular_cliente" id="celular_cliente" value="{{old('celular_cliente')}}"  class="form-control" placeholder="Celular" tabindex="3">
                    <i class="fas fa-mobile-alt"></i>
                </div>
            </div>

        </div>
        <div class="sub-titulo">
                            <b>Forma de pago:</b>
                        </div> 
                        <hr>

           <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <label for="dni">Seleccione Forma de pago:
                  
                </label>
                <select name = 'id_forma_pago' class="custom-select">
                  <option selected="">Selecciona Forma de pago</option>
                  @foreach($formapagos as $fpago)
                  <option value="{{$fpago->id_forma_pago}}">{{$fpago->forma_pago}}</option>
                  @endforeach
                </select>
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