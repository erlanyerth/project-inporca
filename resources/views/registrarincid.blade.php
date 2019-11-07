@extends('plantilla-base')
<script type="text/javascript">
	function marcar(source) 
	{
		checkboxes=document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
		for(i=0;i<checkboxes.length;i++) //recoremos todos los controles
		{
			if(checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
			{
				checkboxes[i].checked=source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
			}
		}
	}
</script>
@section('content')
<div class="container"> 
<section class="mt-2 pt-3 container-fluid">
        <div class="container-fluid">
          
            <div class="row">
                    
                    <div class="col-md-8 ">
                      <h4 class="mb-3 text-danger">REGISTRO DE INCIDENCIA</h4>
                      <hr class="mb-2">
                      <form class="needs-validation" novalidate>
                      @csrf
                        <div class="row">
                          <!--div class="col-md-3 mb-3">
                              <fieldset disabled>
                              <h6 class="font-weight-bold">Código del incidente</h6>
                            <input type="text" class="form-control form-control-sm" id="firstName" placeholder="" value="{{ $codigo }}" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </fieldset>
                          </div>-->
                          <div class="col-md-4 mb-3">
                            <h6 class="font-weight-bold">Fecha y hora del incidente</h6>
                            <input type="datetime-local" name="fechaincid">
                        
                         </div>
                         <div class="col-md-4 mb-3">
                            <h6 class="font-weight-bold">Fecha y hora del reporte</h6>
                            <input type="datetime-local" name="fechareporte">
                         </div>
                         <div class="row">
                                    <div class="col-md-4 mb-3">
                                    
                              <select class="form-control form-control-sm d-block w-100" name="servicio" required>
                                <option value="">Seleccione una categoría...</option>
                                @foreach($categorias as $item2)
                                <option>{{$item2->nombre}}</option>
                                @endforeach()
                              </select>
                          </div>
                          <div class="col-md-4 mb-3">
                                    
                              <select class="form-control form-control-sm d-block w-100" name="servicio" required>
                                <option value="">Seleccione un servicio...</option>
                                <option>DNS</option>
                              </select>
                          </div>
                          
                          <div class="col-md-4 mb-3">
                          <input type="text" class="form-control form-control-sm" name="reportador" placeholder="¿quién reportó el evento?" value="" required>
                                <div class="invalid-feedback">
                                  Este campo es requerido.
                                </div>
                         </div>
                        </div>
                      </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-control-sm" name="accioncorr" placeholder="Acción correctiva" required>
                          <div class="invalid-feedback">
                            Por favor introduzca la acción realizada.
                          </div>
                            </div>
                            <div class="col mb-6">
                              <input type="text" class="form-control form-control-sm" name="observacion" placeholder="Observación">
                          </div>
                             
                        </div>
                        
                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <h6 class="font-weight-bold">Método de notificación</h6>
                            <select class="form-control form-control-sm d-block w-100" name="metnotif" required>
                              <option value="">Seleccione...</option>
                              <option>Correo</option>
                              <option>Teléfono</option>
                              <option>GLPI</option>
                              <option>Monitor de eventos</option>
                              <option>Directo</option>
                            </select>
                            <div class="invalid-feedback">
                              Por favor seleccione un método válido.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <h6 class="font-weight-bold">Estado</h6>
                            <select class="form-control form-control-sm d-block w-100" name="status" required>
                              <option value="">Seleccione...</option>
                              <option>OK</option>
                              <option>Warning</option>
                              <option>Failed</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione un estado válido.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <h6 class="font-weight-bold">Fecha y hora de la solución</h6>
                              <input type="datetime-local" name="fechasolucion">
                          
                          </div>
                        </div>
                        <div class="row">
                                 <div class="col-md-6 mb-3"> 
                                 <h6 class="font-weight-bold">Áreas afectadas:</h6>
                                 <input type="checkbox" id="selectall"> Todas
                                 <br>
                                 @foreach($areas as $item)
                                  <input type="checkbox" class="case" name="case[]"> {{$item->nombre}}
                                  <br>
                                  @endforeach()
                                   </div>
                                   
                         </div>
                         
                        <hr class="mb-2">
                        
                        <div class="text-right">
                          <p>
                           <!-- <button type="button" class="btn btn-secondary">Procesar</button>-->
                        <button type="button" class="btn btn-success">Guardar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
                          </p>
                        </div>
                        
                      </form>
                      <hr class="mb-2">
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3 text-center text-danger">Listado de servicios</h5>
                    <table class="table table-hover">
                        <thead class="">
                          <tr class="bg-light">
                            <th scope="col">Servicio</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Última actualización</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            
                          </tr>
                        
                        </tbody>
                      </table>
               <!--     <div class="card border-warning">
                        <div class="card-header">
                          Listado de servicios
                        </div>
                        <div class="row">
                        <div class="col">
                           Servicio
                           
                          </div>
                          <div class="col">
                            Estado
                          </div>
                          <div class="col">
                            Última actualización
                          </div>
                        </div>
                        <hr class="mb-4">
                      </div>-->
                      
                       
                </div>
           
              
          </div>
      
    </section>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script>
        $("#selectall").on("click", function() {  
  $(".case").prop("checked", this.checked);  
});  

// if all checkbox are selected, check the selectall checkbox and viceversa  
$(".case").on("click", function() {  
  if ($(".case").length == $(".case:checked").length) {  
    $("#selectall").prop("checked", true);  
  } else {  
    $("#selectall").prop("checked", false);  
  }  
});
      </script>
@endsection