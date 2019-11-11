@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-3 pt-3 container-fluid">
                  
                    <div class="card border-dark mb-3 block w-50 mx-auto">
                            <div class="card-body text-dark ">
                                    <h4 class="mb-3 text-center text-danger">REGISTRO DE NUEVO SERVICIO</h4>
                                    @if (session('mensaje'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                      {{ session('mensaje') }}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                      </div>

                                  @endif
                                    <form action="/servicio" method="POST" class="needs-validation" novalidate>
                                    @csrf
                                    @foreach ($errors->get('nombre') as $error)

                                    <div class="alert alert-danger">
                                    ¡El nombre es obligatorio!
                                    </div>
                                    @endforeach
                                    @foreach ($errors->get('idcateg') as $error)

                                    <div class="alert alert-danger">
                                    ¡Seleccione una categoría!
                                    </div>
                                    @endforeach

                                    @foreach ($errors->get('frecuencia') as $error)

                                    <div class="alert alert-danger">
                                    ¡Seleccione una frecuencia!
                                    </div>
                                     @endforeach                                   
                                     <div class="mb-3">
                                            
                                          <label name="id" value="{{ $codigo }}" for="firstName">Código del Servicio:</label>
                                          
                                          <input type="text" class="form-control" id="firstName"  value="{{ $codigo }}" placeholder="" disabled  required>
                                        </div>
                                        
                                       
                                      <div class="mb-3">
                                      <label >Categoría del servicio:</label>
                                      <select class="form-control d-block w-100" name="idcateg" required>
                                     
                                      <option value="">Seleccione...</option>
                                      @foreach($categorias as $item) 
                                        <option>{{$item->nombre}}</option>  
                                      @endforeach()
                                      </select>
                                    </div>
                                      
                                          <div class="mb-3">
                                                <label for="firstName"  >Nombre:</label>
                                              <input type="text" class="form-control" name="nombre" id="firstName" placeholder="Escriba el nombre del servicio"   required>
                                              <div class="invalid-feedback">
                                                Este campo es requerido.
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                            <label >Frecuencia de actualización:</label>
                                            <select class="form-control d-block w-100" name="frecuencia" required>
                                              <option value="">Seleccione...</option>
                                              <option>Diario</option>
                                              <option>Semanal</option>
                                              <option>Quincenal</option>
                                              <option>Mensual</option>
                                            </select>
                                          </div>
                                          <div class="mb-3">
                                            <label >Disponibilidad:</label>
                                            </div>
                                          <label >Desde: </label>
                                          <input class="border-dark" type="time" name="horadesde">
                                          <label >Hasta: </label>
                                          <input class="border-dark" type="time" name="horahasta">
                                      <hr class="mb-4">
                                      <div class="text-center">
                                        <p>
                                          <button type="submit" class="btn btn-success">Guardar</button>
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