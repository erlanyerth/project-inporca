@extends('layouts.app')

@section('content')
<div class="container">
   <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
    <div class="card border-dark  mb-3 block w-50 mx-auto">
                        <div class="card-body text-dark ">
                                
                                    
                                <form class="form-signin">
                                    <div class="text-center mb-4">
                                      <h3 class="mb-3 text-center text-danger">REGISTRAR NUEVO USUARIO</h3>
                                    </div>
                                    <div class="form-label-group my-4">
                                            <input type="text" class="form-control" id="firstName" placeholder="Nombre" value="" required>
                                            <div class="invalid-feedback">
                                              Valid first name is required.
                                            </div>
                                          </div>
                                    <div class="form-label-group my-4">
                                      <input  class="form-control" placeholder="Usuario" required autofocus>
                                    </div>
                                    <div class="form-label-group my-4">
                                            <label for="state">Cargo</label>
                                            <select class="form-control d-block w-100" id="state" required>
                                              <option value="">Seleccione...</option>
                                              <option>Servidores</option>
                                            </select>
                                          </div>
                                    <div class="form-label-group my-4">
                                      <input type="password" id="inputPassword" class="form-control" placeholder="Ingrese contraseña" required>
                                    </div>
                                    <div class="form-label-group my-4">
                                            <input type="password" id="inputrepPassword" class="form-control" placeholder="Repetir contraseña" required>
                                          </div>
                                    <hr class="mb-4">
                                    
                                    
                                    <button class="btn btn-lg btn-danger btn-block" type="submit">Aceptar</button>
                                    
                          </form>
                            
                        </div>
                    </div>
</div>
@endsection
