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
                <div class="card-header" id="registrarse">Registro</div>
              </center>
                <div class="card-body">
                    <form method="POST" action="">
                      

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" placeholder="Nombre"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Apellido Paterno:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" placeholder="Apellido Paterno"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>


                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Apellido Materno:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" placeholder="Apellido Materno"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail:</label>
                             <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  " name="email" placeholder="example@gmail.com"  required autocomplete="email">

                            <i class="far fa-envelope"></i>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"> Password:</label>
                             <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                                <span>Ingresa tu password</span>

                                
                                  
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> Confirmar Password:</label>
                             <label for="name" class="col-md-1 col-form-label text-md-right asterisco ">*</label>


                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                      



                        <div class="form-group row mb-0">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Seleccione Tipo de Usuario:</label>
                            <div class="col-md-6 offset-md-4"> 
                                <label class="radio-inline"><input type="radio" name="role_id" value="1" checked>Usuario</label>
                                <label class="radio-inline"><input type="radio" name="role_id" value="2">Administrador</label>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Seleccione Estado civil:</label>
                            
                            <div class="col-sm-5">
                                <select id="modulo" class="form-control" name="modulo_id" required="">
                                      <option selected="">Opcion </option>
                                      <option selected="">Opcion </option>
                                      <option selected="">Opcion </option>
                                </select>
                        </div>
                        </div>


<br>
<br>
                         <div class="col-sm-12">
                            <div class="area">
                                <cnter>
                                    <label>Describe las espectativas de la empresa</label>
                                </center>
                                <textarea class="form-control" rows="11" required="" placeholder="Escribe aqui ....  " name="desarrollo_infor_mat"></textarea>
                            </div>
                         </div>

<br>
<br>
<br>

                        <div class="form-group row mb-0">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Seleccione Area:</label>
                        <div class="col-sm-5">
                            <select id="modulo" class="form-control" name="modulo_id" required="">
                                <option selected="">Central Mexico </option>
                                <option selected="">Central Mexico </option>
                                <option selected="">Central Mexico </option>
                            </select>
                        </div>
                        </div>

                        
    </div>


<br>
<br>
<br>
<br>
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
                    <th>Nombre</th>
                    <th>Sueldo</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Area</th>
                    <th>Fecha de deposito</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Clave"><span class="block-id">01</span></td>
                    
                    <td data-label="Nombre">Usuario</td>
                    <td data-label="Sueldo">$8000</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Cargo ">Desarrollo Web</td>
                    <td data-label="Area ">Central Mexico</td>
                    <td data-label="Fecha de deposito">10/01/2012</td>
                    <td>
                        <i class="fas fa-trash delete pd-seting-ed" title="Eliminar"></i>
                        
                        <i class="far fa-edit edit" title="Editar"></i>
                    </td>
                    
                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">02</span></td>
                   
                    <td data-label="Nombre">Usuario</td>
                    <td data-label="Sueldo">$8000</td>
                     <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Cargo">Desarrollo Web</td>
                    <td data-label="Area ">Central Mexico</td>
                    <td data-label="Fecha de deposito">10/01/2012</td>
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>
                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">03</span></td>
                    
                    <td data-label="Nombre">Usuario</td>
                    <td data-label="Sueldo">$8000</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Cargo">Desarrollo Web</td>
                    <td data-label="Area ">Central Mexico</td>
                    <td data-label="Fecha de deposito">10/01/2012</td>
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">04</span></td>
                    
                    <td data-label="Nombre">Usuario</td>
                    <td data-label="Sueldo">$8000</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Cargo">Desarrollo Web</td>
                    <td data-label="Area ">Central Mexico</td>
                    <td data-label="Fecha de deposito">10/01/2012</td>
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">05</span></td>
                    
                    <td data-label="Nombre">Usuario</td>
                    <td data-label="Sueldo">$8000</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Cargo">Desarrollo Web</td>
                    <td data-label="Area ">Central Mexico</td>
                    <td data-label="Fecha de deposito">10/01/2012</td>
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">06</span></td>
                    
                    <td data-label="Nombre">Usuario</td>
                    <td data-label="Sueldo">$8000</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Cargo">Desarrollo Web</td>
                    <td data-label="Area ">Central Mexico</td>
                    <td data-label="Fecha de deposito">10/01/2012</td>
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

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


 
<!------------------------------------------------------------*----------------------------------------------------------->
<br>
<br>
<br>


<!------------------------------------------------------------*-----------------------------------------------------------> 

<div class="ejercicio-form">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <center>
                <div class="card-header" id="registrarse">Registro</div>
              </center>
                <div class="card-body">
                    <form method="POST" action="">
                      

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" placeholder="Nombre"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Apellido Paterno:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" placeholder="Apellido Paterno"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>


                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Apellido Materno:</label>
                            <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" placeholder="Apellido Materno"  required autocomplete="name" autofocus>
                                   
                            </div>

                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail:</label>
                             <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  " name="email" placeholder="example@gmail.com"  required autocomplete="email">

                            <i class="far fa-envelope"></i>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"> Password:</label>
                             <label for="name" class="col-md-1 col-form-label text-md-right asterisco">*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                                <span>Ingresa tu password</span>

                                
                                  
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> Confirmar Password:</label>
                             <label for="name" class="col-md-1 col-form-label text-md-right asterisco ">*</label>


                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                      



                        <div class="form-group row mb-0">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Seleccione Tipo de Usuario:</label>
                            <div class="col-md-6 offset-md-4"> 
                                <label class="radio-inline"><input type="radio" name="role_id" value="1" checked>Usuario</label>
                                <label class="radio-inline"><input type="radio" name="role_id" value="2">Administrador</label>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Seleccione Estado civil:</label>
                            
                            <div class="col-sm-5">
                                <select id="modulo" class="form-control" name="modulo_id" required="">
                                      <option selected="">Opcion </option>
                                      <option selected="">Opcion </option>
                                      <option selected="">Opcion </option>
                                </select>
                        </div>
                        </div>


<br>
<br>

                         <div class="col-sm-12">
                                <div class="area">
    <center>
      <label>Describe las espectativas de la empresa</label>
    </center>
    <textarea class="form-control" rows="11" required="" placeholder="Escribe aqui ....  Usuario " name="desarrollo_infor_mat"></textarea>
  </div>

                        </div>

                        <br>
<br>
<br>

<div class="form-group row mb-0">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Seleccione Area:</label>
                            
                            <div class="col-sm-5">
                                <select id="modulo" class="form-control" name="modulo_id" required="">
                                      <option selected="">Central Mexico </option>
                                      <option selected="">Central Mexico </option>
                                      <option selected="">Central Mexico </option>
                                </select>
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

                       
                        <br><br><br>
                        
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