@extends('plantilla-base')

@section('content')
<section class="mt-3 pt-3 container-fluid">

<div class="card mx-auto block w-50 p-3 shadow rounded">
  <div class="card-body">
          <h4 class="mb-3 text-center text-danger">GENERAR REPORTE DE DISPONIBILIDAD EFECTIVA</h4>
          <hr class="mb-3">
          <form action="/Reporte" id="myForm" method="POST">
          @csrf 
          <h6 class="font-weight-bold">Rango de fechas:</h6>
          
          <div class="row">
              <div class="col-auto">
                      <h6 class="font-weight-bold">Desde:</h6>
                      <input id="date" name="desde" type="date">
                  </div>
                  <div class="col-auto">
                      <h6 class="font-weight-bold">Hasta</h6>
                      <input id="date" name="hasta" type="date">
                  </div>
                  <div class="col-auto pt-3">
                      <button type="submit" class="btn btn-danger">BUSCAR</button>
                  </div>
                  </div>
                  </form>
    
    <hr class="mb-4">
    </div>
</div>


  </section>

  @endsection
      