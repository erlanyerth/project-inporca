@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-5 pt-3 container-fluid">
                  
                  <div class="card border-dark mb-3 block w-50 mx-auto">
                          <div class="card-body text-dark ">
                                  <h4 class="mb-3 text-center text-danger">REGISTRO DE NUEVA CATEGORÍA</h4>
                                  <form class="needs-validation" novalidate>
                                      <hr class="mb-4">
                                      <div class="mb-3">
                                          <fieldset disabled>
                                        <label for="firstName">Código de la categoría:</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                        <fieldset disabled></fieldset>
                                      </div>
                                      
                                     
                                    
                                        <div class="mb-3">
                                              <label for="firstName">Nombre:</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="Escriba el nombre de la categoría" value="" required>
                                            <div class="invalid-feedback">
                                              Este campo es requerido.
                                            </div>
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