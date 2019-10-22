@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-3 pt-3 container-fluid">
                  
                    <div class="card border-dark mb-3 block w-50 mx-auto">
                            <div class="card-body text-dark ">
                                    <h4 class="mb-3 text-center text-danger">REGISTRO DE NUEVO SERVICIO</h4>
                                    <form class="needs-validation" novalidate>
                                      
                                        <div class="mb-3">
                                            
                                          <label for="firstName">Código del Servicio:</label>
                                          <fieldset disabled>
                                          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                          <div class="invalid-feedback">
                                            Valid first name is required.
                                          </div>
                                        </fieldset>
                                        </div>
                                        
                                       
                                      <div class="mb-3">
                                      <label for="state">Categoría del servicio:</label>
                                      <select class="form-control d-block w-100" id="state" required>
                                        <option value="">Seleccione...</option>
                                        <option>Servidores</option>
                                      </select>
                                    </div>
                                      
                                          <div class="mb-3">
                                                <label for="firstName">Nombre:</label>
                                              <input type="text" class="form-control" id="firstName" placeholder="Escriba el nombre del servicio" value="" required>
                                              <div class="invalid-feedback">
                                                Este campo es requerido.
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                            <label for="state">Frecuencia de actualización:</label>
                                            <select class="form-control d-block w-100" id="state" required>
                                              <option value="">Seleccione...</option>
                                              <option>Diario</option>
                                              <option>Semanal</option>
                                              <option>Quincenal</option>
                                              <option>Mensual</option>
                                            </select>
                                          </div>
                                        
                
                                      <hr class="mb-4">
                                      <div class="text-center">
                                        <p>
                                          <button type="button" class="btn btn-success">Guardar</button>
                                          <button type="button" class="btn btn-danger">Cancelar</button>
                                        </p>
                                      </div>
                                      
                                    </form>
                                    <hr class="mb-4">
                            </div>
                        </div>
                      
              </section>
              </div>
@endsection