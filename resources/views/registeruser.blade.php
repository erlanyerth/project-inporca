@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-3 pt-3  container-fluid">
                    <div class="card border-dark  mb-3 block w-50 mx-auto">
                        <div class="card-body text-dark ">
                                
                                    
                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                    <div class="text-center mb-4">
                                      <h3 class="mb-3 text-center text-danger">REGISTRAR NUEVO USUARIO</h3>
                                    </div>
                                    <div class="form-label-group my-4">
                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                                            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                          </div>
                                    <div class="form-label-group my-4">
                                      <input  class="form-control{{ $errors->has('nameuser') ? ' is-invalid' : '' }}" name="nameuser" value="{{ old('nameuser') }}"  placeholder="Usuario" required autofocus>
                                      @if ($errors->has('nameuser'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nameuser') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    
                                    <div class="form-label-group my-4">
                                      <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Ingrese contraseña">
                                      @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    <div class="form-label-group my-4">
                                            <input type="password" id="inputrepPassword" class="form-control" placeholder="Repetir contraseña" name="password_confirmation" required>
                                          </div>
                                    <hr class="mb-4">
                                    
                                    
                                    <button class="btn btn-lg btn-danger btn-block" type="submit">Aceptar</button>
                                    
                          </form>
                            
                        </div>
                    </div>
                </section>
                            
                       
@endsection