@extends('plantilla-base')

@section('content')
<div class="container"> 
<section class="mt-2 pt-3 container-fluid">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 ">
    
        <h4 class="mb-3 text-danger">REGISTRO DE INCIDENCIA</h4>
        <hr class="mb-2">
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-3 mb-3">
                <fieldset disabled>
                <h6 class="font-weight-bold">Código de la incidencia</h6>
              <input type="text" class="form-control form-control-sm" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </fieldset>
            </div>
            <div class="col-md-3 mb-3">
                <!-- <label for="state">Categoría del servicio:</label>
                 <select class="custom-select d-block w-100" id="state" required>
                   <option value="">Seleccione...</option>
                   <option>Servidores</option>
                 </select>-->
                 <h6 class="font-weight-bold">Categoría del servicio </h6>
                 @foreach($categorias as $item) 
                 <div class="custom-control custom-radio">
                   <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                   <label class="custom-control-label" for="credit">{{$item->nombre}}</label>
                 </div>
                 @endforeach()
                                     
             </div>
             <div class="col-md-3 mb-3"> 
                <h6 class="font-weight-bold">Áreas afectadas</h6>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">todas</label>
                  </div>
                  @foreach($areas as $item2)
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" >
                    <label class="custom-control-label" >{{$item2->nombre}}</label>
                  </div>
                  @endforeach()
                  </div>
                  <div class="col-md-3 mb-3"> 
                                     
              
                      </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <h6 class="font-weight-bold">Servicio</h6>
          <select class="form-control form-control-sm d-block w-100" id="state" required>
            <option value="">Seleccione...</option>
            <option>DNS</option>
          </select>
      </div>
      <div class="col-md-4 mb-3 mx-1">
        <h6 class="font-weight-bold">Fecha y hora del incidente</h6>
        <input type="datetime-local" name="fechayhora">
     </div>
     <div class="col-md-4 mb-3">
        <h6 class="font-weight-bold">Fecha y hora del reporte</h6>
        <input type="datetime-local" name="fechayhora">
     </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control form-control-sm" id="firstName" placeholder="Indique quién reportó el evento" value="" required>
                <div class="invalid-feedback">
                  Este campo es requerido.
                </div>
            </div>
            
             <div class="col-md-6 mb-3">
                <input type="text" class="form-control form-control-sm" id="address" placeholder="Acción correctiva" required>
              <div class="invalid-feedback">
                Por favor introduzca la acción realizada.
              </div>
             </div>
        </div>
        <div class="row">
            <div class="col mb-3">
               
            </div>
            <div class="col mb-3">
                <input type="text" class="form-control form-control-sm" id="address2" placeholder="Observación">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <h6 class="font-weight-bold">Método de notificación</h6>
                <select class="form-control form-control-sm d-block w-100" id="country" required>
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
              <select class="form-control form-control-sm d-block w-100" id="state" required>
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
                <input type="datetime-local" name="fechayhora">
            
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
</div>
<div class="col-md-4 ">

</div>
</div>
</div>
</section>
</div>
@endsection