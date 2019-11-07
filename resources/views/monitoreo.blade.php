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
                            <th><input type="checkbox" id="selectall" class="checkthis" /></th>
                            <th scope="col">Código del servicio</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Estado</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          @foreach($servicios as $item)
                            <th><input type="checkbox" class="case" name="case[]" /></th>
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
                                    <td>{{$item2->created_at}}</td>
                                  </tr>
                                @endforeach()
                                </tbody>
                              </table>
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
                               
                        </div>
        </div>
                    
                
        
     
</section>
</div>
@endsection