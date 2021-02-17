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
                    <form method="POST" action="">
                      

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="nombre" placeholder="Nombre"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Apellido Paterno:</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="Apellido_Paterno" placeholder="Apellido Paterno"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Apellido Materno:</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="Apellido_Materno" placeholder="Apellido Materno"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Direccion (calle):</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="Apellido_Materno" placeholder="Direccion (calle)"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Departamento,suite,codigo de accseso(opc.):</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="Apellido_Materno" placeholder="Departamento,suite,codigo de accseso(opc.)"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Colonia:</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="Apellido_Materno" placeholder="Colonia"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ciudad:</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="Apellido_Materno" placeholder="Ciudad"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>


                        <div class="form-group row ">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right">Seleccione Estado:</label>
                            
                            <div class="col-sm-5">
                                <select id="modulo" class="form-control" name="modulo_id" required="">
                                      <option selected="">Estado de Mexico </option>
                                      <option selected="">Aguascalientes </option>
                                      <option selected="">Morelos </option>
                                </select>
                        </div>
                        </div>

                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Codigo postal:</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="Apellido_Materno" placeholder="Codigo postal"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>
                        <div class="sub-titulo">
                            <b>¿Cuál es tu información de contacto?:</b>
                        </div> 
                        <hr>
                        <div class="form-group row"> 
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  " name="email" placeholder="example@gmail.com"  required autocomplete="email">

                            <i class="far fa-envelope"></i>
                            <label for="name" class="col-md-10 col-form-label text-md-justify">Te enviaremos el recibo por email</label> 
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Número de celular:</label>
                            
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="nombre" placeholder="Numero de celular"  required autocomplete="name" autofocus>
                                <i class="fas fa-mobile-alt"></i>
                                <label for="name" class="col-md-13 col-form-label text-justify">El número de teléfono que ingreses no podrá cambiarse después de hacer el pedido, por lo que debes asegurarte de que sea correcto. </label> 
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
<br>
<br>
<br>
                        
    </div>


              
                        
                        <div class="form-group row mb-0 ">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-outline-danger font-weight-bold">
                                     Cancelar
                                </button>
                                <input type="submit" class="btn btn-outline-warning font-weight-bold"  value="Pagar Ahora"/>
                            </div>
                        </div>
<br>
<br>
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