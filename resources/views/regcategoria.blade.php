@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-5 pt-3 container-fluid">
                  
                  <div class="card border-dark mb-3 block w-50 mx-auto">
                          <div class="card-body text-dark ">
                                  <h4 class="mb-3 text-center text-danger">REGISTRO DE NUEVA CATEGORÍA</h4>
                                  @if (session('mensaje'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                      {{ session('mensaje') }}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                      </div>

                                  @endif
                                  <form  method="POST" action="/categoria">
                                    @csrf 

                                    @foreach ($errors->get('nombre') as $error)

                                      <div class="alert alert-danger">
                                        ¡El nombre es obligatorio!
                                      </div>
                                    @endforeach
                                  <hr class="mb-4">
                                      <div class="mb-3">
                                        <!-- <fieldset disabled>-->
                                        <label for="firstName" name="idcateg" value="{{ $codigo }}">Código de la categoría:</label>
                                        
                                        <input type="text" class="form-control" name="idcateg"   value="{{ $codigo }}" placeholder="" readonly>
                                        
                                        <!--<fieldset disabled></fieldset>-->
                                      </div>
                                      
                                     
                                    
                                        <div class="mb-3">
                                              <label for="firstName">Nombre:</label>
                                            <input type="text" class="form-control" name="nombre"  placeholder="Escriba el nombre de la categoría" value="">
                                           
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