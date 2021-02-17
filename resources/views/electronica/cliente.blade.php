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
                <tr>
                    <td data-label="Clave"><span class="block-id">01</span></td>
                    
                    <td data-label="Nombre Cliente">Jesus Chicho Hernandez</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Estado">Estado de Mexico</td>
                    <td data-label="Telefono">5529983634</td>
                                        
                    <td>
                        <i class="fas fa-trash delete pd-seting-ed" title="Eliminar"></i>
                        
                        <i class="far fa-edit edit" title="Editar"></i>
                    </td>
                    
                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">02</span></td>
                   
                    <td data-label="Nombre Cliente">Jesus Chicho Hernandez</td>
                     <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Estado">Estado de Mexico</td>
                    <td data-label="Telefono">5529983634</td>
                                        
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>
                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">03</span></td>
                    
                    <td data-label="Nombre Cliente">Jesus Chicho Hernandez</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Estado">Estado de Mexico</td>
                    <td data-label="Telefono">5529983634</td>
                                        
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">04</span></td>
                    
                    <td data-label="Nombre Cliente">Jesus Chicho Hernandez</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Estado">Estado de Mexico</td>
                    <td data-label="Telefono">5529983634</td>
                                        
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">05</span></td>
                    
                    <td data-label="Nombre Cliente">Jesus Chicho Hernandez</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Estado">Estado de Mexico</td>
                    <td data-label="Telefono">5529983634</td>
                                        
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">06</span></td>
                    
                    <td data-label="Nombre Cliente">Jesus Chicho Hernandez</td>
                    <td data-label="Email" >
                        <span class="block-email">doe@example.com</span>
                    </td>
                    <td data-label="Estado">Estado de Mexico</td>
                    <td data-label="Telefono">5529983634</td>
                                        
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



<!------------------------------------------------------------------------------------------------------------------>




@stop