@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-3 pt-3 container-fluid">
        <div class="row">
                <div class="col-md-8 ">
                        <h4 class="mb-3 text-center text-danger">MONITOREO DE SERVICIOS</h4>
                        <div class="row">
                                <div class="col-md-4">
                                        <h6 class="font-weight-bold">Fecha y hora del seguimiento</h6>
                                        <input type="datetime-local" name="fechayhora">
                                    </div>
                                        <div class="col-md-4">
                                                <div class="mb-3">
                                                        <label class="font-weight-bold" for="state">Responsable</label>
                                                        <select class="form-control form-control-sm d-block w-100" id="state" required>
                                                          <option value="">Seleccione...</option>
                                                          <option>josé</option>
                                                            <option>pedro</option>
                                                            <option>juan</option>
                                                        </select>
                                                      </div>
                                        </div>
                                        
                                
                        </div>
                        
                    <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th><input type="checkbox" class="checkthis" /></th>
                            <th scope="col">Código del servicio</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Estado</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><input type="checkbox" class="checkthis" /></th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            
                          </tr>
                          <tr>
                            <th><input type="checkbox" class="checkthis" /></th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            
                          </tr>
                          <tr>
                            <th><input type="checkbox" class="checkthis" /></th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                           
                          </tr>
                        </tbody>
                      </table>
                      <hr class="mb-4">
                      <div class="text-center">
                        <p>
                          <button type="button" class="btn btn-success">Guardar</button>
                          <button type="button" class="btn btn-danger">Cancelar</button>
                        </p>
                      </div>
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
@endsection