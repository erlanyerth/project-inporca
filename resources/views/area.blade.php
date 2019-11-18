@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-5 pt-3 container-fluid">
                  
                  <div class="card border-dark mb-3 block w-50 mx-auto">
                          <div class="card-body text-dark ">
                                  <h4 class="mb-3 text-center text-danger">REGISTRO DE NUEVA ÁREA</h4>
                                  @if (session('mensaje'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                      {{ session('mensaje') }}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                      </div>

                                  @endif
                                  <form action="/area" method="POST">
                                    @csrf 
                                  <hr class="mb-4">
                                      <div class="mb-3">
                                        
                                        <label name="id" value="{{ $codigo }}" >Código del Área:</label>
                                        
                                        <input type="text" name="id" class="form-control" value="{{ $codigo }}"  placeholder="" readonly>
                                        
                                      </div>
                                      
                                     
                                    
                                        <div class="mb-3">
                                              <label >Nombre:</label>
                                            <input type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre"  placeholder="Escriba el nombre del Área" value="">
                                            @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                      
              
                                    <hr class="mb-4">
                                    <div class="text-center">
                                      <p>
                                        <button  type="submit" class="btn btn-success">Guardar</button>
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