@extends('plantilla-base')
<style>
.anyClass {
  height:600px;
  width:500px;
  overflow-y: scroll;
}
</style>
@section('content')
<div class="container">
<section class="mt-4 pt-3 container-fluid">
        <div class="row">
            <div class="col-md-7 ">
                <div class="card border-dark mb-3 block w-75 mx-auto">
                    <div class="card-body text-dark ">
                            <h4 class="mb-3 text-center text-danger">SEGUIMIENTO DE INCIDENCIA</h4>
                            <hr class="mb-2">
                            @if (session('mensaje'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                      {{ session('mensaje') }}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                      </div>

                                  @endif
                            <form method="POST" id="myForm" action="{{ route('seguimientoIncidencia.store') }}" class="needs-validation" novalidate>
                         
                            @csrf 

                                    @foreach ($errors->get('fechayhora') as $error)

                                      <div class="alert alert-danger">
                                        ¡La fecha no es válida!
                                      </div>
                                    @endforeach
                                    @foreach ($errors->get('servicio') as $error)

                                      <div class="alert alert-danger">
                                        ¡Seleccione un servicio!
                                      </div>
                                    @endforeach
                                    @foreach ($errors->get('accion') as $error)

                                      <div class="alert alert-danger">
                                        ¡Ingrese una acción correctiva!
                                      </div>
                                    @endforeach
                                    @foreach ($errors->get('status') as $error)

                                      <div class="alert alert-danger">
                                        ¡Seleccione un estado!
                                      </div>
                                    @endforeach
                            <div class="mb-4">
                            <h6 class="font-weight-bold">Fecha y hora del seguimiento</h6>
                            <input type="datetime-local" name="fechayhora">
                            <input type="date" id="date" class="invisible" name="date" value="{{ old('fechayhora') }}">
                            
                           </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold" for="state">Servicio con problema registrado</label>
                                    <select class="form-control d-block w-100" id="state" name="servicio" required>
                                      <option value="">Seleccione...</option>
                                      @foreach($servicio as $item)
                                      <option value="{{$item->id}}" >{{$item->nombre}}</option>
                                      @endforeach()
                                    </select>
                                  </div>
                                  <div class="mb-3">
                              <input type="text" class="form-control" id="firstName" name="accion" placeholder="Acción correctiva" value="{{ old('accion') }}" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                                <div class="mb-3">
                                  <input type="text" class="form-control" id="firstName" name="observacion" placeholder="Observación" value="{{ old('observacion') }}" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                
                               
                              <div class="mb-3">
                              <label class="font-weight-bold" for="state">Estado actual del servicio</label>
                              <select class="form-control d-block w-100" name="status" id="state" required>
                                <option value="">Seleccione...</option>
                                <option>OK</option>
                                  <option>Warning</option>
                                  <option>Failed</option>
                              </select>
                            </div>
                            
                            
                            
                                 
                              <hr class="mb-2">
                              <div class="text-center">
                                <p>
                                  <button type="submit" class="btn btn-success">Guardar</button>
                                  <button type="button" onclick="myFunction()" value="Reset form" class="btn btn-danger">Cancelar</button>
                                </p>
                              </div>
                              
                            </form>
                            <hr class="mb-2">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card anyClass">
                <div class="card-body">
                <h5 class="mb-3 text-center text-danger">Listado de servicios</h5>
                    <table class="table table-sm table-bordered">
                                <thead class="">
                                  <tr class="bg-light">
                                  <th scope="col">Código</th>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Última actualización</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($listserv as $item2)
                                  <tr>
                                    <th scope="row">{{$item2->id}}</th>
                                    <td>{{$item2->nombre}}</td>
                                    <td>{{$item2->statuscomport}}</td>
                                    <td>{{$item2->updated_at}}</td>
                                  </tr>
                                @endforeach()
                                </tbody>
                              </table>
                      </div>
                      
</div>
                      
                       
                </div>
        </div>
        
          
  </section>
  </div>
  <script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
<script>
window.onload = function(){
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  document.getElementById('date').value=ano+"-"+mes+"-"+dia;
}
</script>
@endsection
  