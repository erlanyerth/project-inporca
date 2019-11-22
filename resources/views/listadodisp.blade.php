@extends('plantilla-base')

@section('content')
<section class="mt-3 pt-3 container-fluid">
<div class="card mx-auto block w-75 p-3 shadow rounded">
  <div class="card-body">
          <h4 class="mb-3 text-center text-danger">REPORTE DE DISPONIBILIDAD EFECTIVA</h4>
          
          <h6 class="font-weight-bold">Rango de fechas:</h6>
          
          <div class="row">
              <div class="col-auto">
                      <h6 class="font-weight-bold">Desde:</h6>
                      <input id="date" type="date">
                  </div>
                  <div class="col-auto">
                      <h6 class="font-weight-bold">Hasta</h6>
                      <input id="date" type="date">
                  </div>
                  <div class="col-auto pt-3">
                      <button type="button" class="btn btn-danger">BUSCAR</button>
                  </div>
                  </div>
                  <hr class="mb-5">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Código de servicio</th>
          <th scope="col">Servicio</th>
          <th scope="col">Tiempo de inactividad</th>
          <th scope="col">Porcentaje de disponibilidad efectiva</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach($incidencia as $item)
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->id}}</td>
          <td>{{$item->id}}</td>
          <td>{{$item->id}}</td>
        </tr>
        @endforeach()
      </tbody>
    </table>
    <hr class="mb-4">
    </div>
</div>


  </section>

  @endsection
      