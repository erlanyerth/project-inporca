@extends('plantilla-base')

@section('content')
<div class="container">
<section class="mt-3 pt-3 container-fluid">
        <div class="row">
                <div class="col-md-8 ">
                <div class="card mx-auto p-3 shadow rounded">
  <div class="card-body">
                <form  method="POST" id="myForm" action="/monitoreo">
                                    @csrf 
                                    @foreach ($errors->get('fechayhora') as $error)

                                      <div class="alert alert-danger">
                                        ¡La fecha es obligatorio!
                                      </div>
                                    @endforeach
                                    
                                    @foreach ($errors->get('case') as $error)

                                      <div class="alert alert-danger">
                                        ¡Debe seleccionar al menos una opción!
                                      </div>
                                    @endforeach
                        <h4 class="mb-3 text-center text-danger">MONITOREO DE SERVICIOS</h4>
                        @if (session('mensaje'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                      {{ session('mensaje') }}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                      </div>
                                  @endif
                        <div class="row">
                                <div class="col-md-4 mb-4">
                                        <h6 class="font-weight-bold">Fecha y hora del seguimiento</h6>
                                        <input type="datetime-local" value="{{ old('fechayhora') }}" name="fechayhora">
                                    </div>       
                        </div>
      
                    <table class="table" id="tabla">
                        <thead class="thead-light">
                          <tr>
                            <th><input type="checkbox" id="selectall" class="checkthis" /></th>
                            <th scope="col">Código del servicio</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Estado</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          @foreach($servicios as $item)
                            <td><input type="checkbox"  class="case"   name="case[]" value="{{$item->id}}"/></td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->statuscomport}}</td>
                            <!--<td><input class="form-control" type="text" name="id[]" value="{{$item->id}}" readonly></td>
                            <td><input class="form-control" type="text" name="nombre[]" value="{{$item->nombre}}" readonly></td>
                            <td><input class="form-control" type="text" name="status[]" value="{{$item->statuscomport}}" readonly></td>-->
                            
                          </tr>
                          @endforeach()
                        </tbody>
                      </table>
                      <hr class="mb-4">
                      <div class="text-center">
                        <p>
                          <button type="submit" class="btn btn-success">Guardar</button>
                          <button type="button" onclick="myFunction()" value="Reset form" class="btn btn-danger">Cancelar</button>
                        </p>
                      </div>
                    </div>
                    </form>
                    </div>
</div>
                    <div class="col-md-4">
                            <h5 class="mb-3 text-center text-danger">Listado de servicios</h5>
                            <table class="table table-hover table-bordered">
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

      <script>
        $("#selectall").on("click", function() {  
  $(".case").prop("checked", this.checked);  
});  

// if all checkbox are selected, check the selectall checkbox and viceversa  
$(".case").on("click", function() {  
  if ($(".case").length == $(".case:checked").length) {  
    $("#selectall").prop("checked", true);  
  } else {  
    $("#selectall").prop("checked", false);  
  }  
});
      </script>
                               
                        
    
</section>
</div>
<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script> 
@endsection