@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-4 pt-3 container-fluid">
        <div class="row">
            <div class="col-md-8 ">
                <div class="card border-dark mb-3 block w-75 mx-auto">
                    <div class="card-body text-dark ">
                            <h4 class="mb-3 text-center text-danger">SEGUIMIENTO DE INCIDENCIA</h4>
                            <hr class="mb-2">
                            <form class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-4">
                            <h6 class="font-weight-bold">Fecha y hora del seguimiento</h6>
                            <input type="datetime-local" name="fechayhora">
                           </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold" for="state">Servicio con problema registrado</label>
                                    <select class="form-control d-block w-100" id="state" required>
                                      <option value="">Seleccione...</option>
                                      @foreach($servicio as $item)
                                      <option>{{$item->nombre}}</option>
                                      @endforeach()
                                    </select>
                                  </div>
                                  <div class="mb-3">
                              <input type="text" class="form-control" id="firstName" placeholder="Acción correctiva" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                                <div class="mb-3">
                                  <input type="text" class="form-control" id="firstName" placeholder="Observación" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                
                               
                              <div class="mb-3">
                              <label class="font-weight-bold" for="state">Estado actual del servicio</label>
                              <select class="form-control d-block w-100" id="state" required>
                                <option value="">Seleccione...</option>
                                <option>OK</option>
                                  <option>Warning</option>
                                  <option>Failed</option>
                              </select>
                            </div>
                            
                            
                            
                                 
                              <hr class="mb-2">
                              <div class="text-center">
                                <p>
                                  <button type="button" class="btn btn-success">Guardar</button>
                                  <button type="button" class="btn btn-danger">Cancelar</button>
                                </p>
                              </div>
                              
                            </form>
                            <hr class="mb-2">
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
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
            </div>
        </div>
        
          
  </section>
  </div>
@endsection
  