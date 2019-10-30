@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-3 pt-3 container-fluid">
        <div class="row">
                <div class="col-md-8 ">
                        <h4 class="mb-3 text-center text-danger">MONITOREO DE SERVICIOS</h4>
                        <div class="row">
                                <div class="col-md-4 mb-4">
                                        <h6 class="font-weight-bold">Fecha y hora del seguimiento</h6>
                                        <input type="datetime-local" name="fechayhora">
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
                          @foreach($servicios as $item)
                            <th><input type="checkbox" class="checkthis" /></th>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->statuscomport}}</td>
                            
                          </tr>
                          @endforeach()
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
                                  <th scope="col">Código</th>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Última actualización</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($servicios as $item)
                                  <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->statuscomport}}</td>
                                    <td>{{$item->created_at}}</td>
                                  </tr>
                                @endforeach()
                                </tbody>
                              </table>
                      
                               
                        </div>
        </div>
                    
                
        
     
</section>
</div>
@endsection