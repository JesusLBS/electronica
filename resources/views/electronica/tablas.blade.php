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
    <h1>Reporte pago</h1>
</div>
<br>
<!-------------------------------------------------- Tabla de Consulta(Reporte) ---------------------------------------------------------------->




<div class="ejercicio-tabla">

        <table class="table">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre Cliente</th>
                    <th>Monto Pagado</th>
                    <th>Fecha de Pago</th>
                    <th>Hora de Pago</th>
                    <th>Forma de Pago</th>
                    <th>Facturacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Clave"><span class="block-id">01</span></td>
                    
                    <td data-label="Nombre Cliente">Usuario</td>
                    <td data-label="Monto Pagado">$8000</td>
                    <td data-label="Fecha de Pago">10/01/2012</td>
                    <td data-label="Hora de Pago">13:10:00</td>
                    <td data-label="Forma de Pago ">Efectivo</td>
                    <td data-label="Facturacion "></td>
                    
                    <td>
                        <i class="fas fa-trash delete pd-seting-ed" title="Eliminar"></i>
                        
                        <i class="far fa-edit edit" title="Editar"></i>
                    </td>
                    
                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">02</span></td>
                   
                    <td data-label="Nombre Cliente">Usuario</td>
                    <td data-label="Monto Pagado">$8000</td>
                    <td data-label="Fecha de Pago">10/01/2012</td>
                     <td data-label="Hora de Pago">13:10:00</td>
                    <td data-label="Forma de Pago">Efectivo</td>
                    <td data-label="Facturacion "></td>
                    
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>
                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">03</span></td>
                    
                    <td data-label="Nombre Cliente">Usuario</td>
                    <td data-label="Monto Pagado">$8000</td>
                    <td data-label="Fecha de Pago">10/01/2012</td>
                    <td data-label="Hora de Pago">13:10:00</td>
                    <td data-label="Forma de Pago">Efectivo</td>
                    <td data-label="Facturacion "></td>
                    
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">04</span></td>
                    
                    <td data-label="Nombre Cliente">Usuario</td>
                    <td data-label="Monto Pagado">$8000</td>
                    <td data-label="Fecha de Pago">10/01/2012</td>
                    <td data-label="Hora de Pago">13:10:00</td>
                    <td data-label="Forma de Pago">Efectivo</td>
                    <td data-label="Facturacion "></td>
                    
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">05</span></td>
                    
                    <td data-label="Nombre Cliente">Usuario</td>
                    <td data-label="Monto Pagado">$8000</td>
                    <td data-label="Fecha de Pago">10/01/2012</td>
                    <td data-label="Hora de Pago">13:10:00</td>
                    <td data-label="Forma de Pago">Efectivo</td>
                    <td data-label="Facturacion "></td>
                    
                    <td>
                        <i class="fas fa-trash delete"></i>
                        <i class="far fa-edit edit"></i>
                    </td>

                </tr>
                <tr>
                    <td data-label="Clave"><span class="block-id">06</span></td>
                    
                    <td data-label="Nombre Cliente">Usuario</td>
                    <td data-label="Monto Pagado">$8000</td>
                    <td data-label="Fecha de Pago">10/01/2012</td>
                    <td data-label="Hora de Pago">13:10:00</td>
                    <td data-label="Forma de Pago">Efectivo</td>
                    <td data-label="Facturacion "></td>
                    
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