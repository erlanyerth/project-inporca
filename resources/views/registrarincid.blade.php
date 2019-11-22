@extends('plantilla-base')
<!--<script type="text/javascript">
	function marcar(source) 
	{
		checkboxes=document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
		for(i=0;i<checkboxes.length;i++) //recoremos todos los controles
		{
			if(checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
			{
				checkboxes[i].checked=source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
			}
		}
	}
</script>-->
@section('content')
<div class="container"> 
<section class="mt-2 pt-3 container-fluid">
        <div class="container-fluid">
         @inject('categorias', 'App\services\categ')
            <div class="row">
                    
                    <div class="col-md-7" >
                   
                    <div class="card border-dark">
                          <div class="card-body text-dark ">
                      <h4 class="mb-3 text-danger">REGISTRO DE INCIDENCIA</h4>
                      <hr class="mb-2">
                      @if (session('mensaje'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                      {{ session('mensaje') }}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                                      </div>

                                  @endif
                      <form  method="POST" id="myForm" action="/incidencia" class="needs-validation" novalidate>
                      @csrf
                      @foreach ($errors->get('fechaincid') as $error)

                                      <div class="alert alert-danger">
                                        ¡La fecha del incidente es obligatorio!
                                      </div>
                                    @endforeach
                                    @foreach ($errors->get('fechareporte') as $error)

                                      <div class="alert alert-danger">
                                        ¡La fecha del reporte es obligatorio!
                                      </div>
                                    @endforeach
                        <div class="row">
                        
                          <div class="col-md-6 mb-3">
                            <h6 class="font-weight-bold">Fecha y hora del incidente</h6>
                            <input type="datetime-local" name="fechaincid">
                        
                         </div>
                         <div class="col-md-6 mb-3">
                            <h6 class="font-weight-bold">Fecha y hora del reporte</h6>
                            <input type="datetime-local" name="fechareporte">
                         </div>
                         </div>
                         <div class="row">
                                    <div class="col-md-4 mb-3">
                                    
                              <select class="form-control form-control-sm d-block w-100" id="categ" name="categ_id" required>
                              <option value="color">Color</option>
                              <option value="country">Country</option>
                               @foreach($categorias->get() as $index => $categoria)
                                <option value="{{ $index }}" {{ old('categ_id') == $index ? 'selected' : '' }}>{{ $categoria }}</option>
                                @endforeach()
                              </select>
                          </div>
                          <div class="col-md-4 mb-3">
                          <select id="serv" data-old="{{ old('serv_id') }}" name="serv_id" class="form-control{{ $errors->has('serv_id') ? ' is-invalid' : '' }}"></select>

                                    @if ($errors->has('serv_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('serv_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                          <div class="col-md-4 mb-3">
                          <input type="text" class="form-control form-control-sm{{ $errors->has('reportador') ? ' is-invalid' : '' }}" name="reportador" placeholder="¿quién reportó el evento?" value="" required>
                          @if ($errors->has('reportador'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reportador') }}</strong>
                                    </span>
                                @endif
                         </div>
                        </div>
                     
                        <div class="row">
                            <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-control-sm{{ $errors->has('accioncorr') ? ' is-invalid' : '' }}" name="accioncorr" placeholder="Acción correctiva" required>
                            @if ($errors->has('accioncorr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accioncorr') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col mb-6">
                              <input type="text" class="form-control form-control-sm" name="observacion" placeholder="Observación">
                          </div>
                             
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <h6 class="font-weight-bold">Método de notificación</h6>
                            <select class="form-control form-control-sm d-block w-100{{ $errors->has('metnotif') ? ' is-invalid' : '' }}" name="metnotif" required>
                              <option value="">Seleccione...</option>
                              <option>Correo</option>
                              <option>Teléfono</option>
                              <option>GLPI</option>
                              <option>Monitor de eventos</option>
                              <option>Directo</option>
                            </select>
                            @if ($errors->has('metnotif'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('metnotif') }}</strong>
                                    </span>
                                @endif
                          </div>
                          <div class="col-md-6 mb-3">
                              <h6 class="font-weight-bold">Estado</h6>
                            <select class="form-control form-control-sm d-block w-100{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" required>
                              <option value="">Seleccione...</option>
                              <option>OK</option>
                              <option>Warning</option>
                              <option>Failed</option>
                            </select>
                            @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                          </div>
                          
                        </div>
                        <div class="row">
                        <div class="col-md-6 mb-3">
                              <h6 class="font-weight-bold">Fecha y hora de la solución</h6>
                              <input type="datetime-local" name="fechasolucion">
                          
                          </div>
                          <div class="col-md-6 mb-3"> 
                                 <h6 class="font-weight-bold">Áreas afectadas:</h6>
                                 <input type="checkbox" id="selectall"> Todas
                                 <br>
                                 @foreach($areas as $item)
                                 <label><input type="checkbox" class="case" name="case[]" value="{{$item->id}}"> {{$item->nombre}}
                                  </label><br>
                                  @endforeach()
                                   </div>
                        </div>
                    
                        <hr class="mb-2">
                        
                        <div class="text-right">
                        <p>
                                        <button  type="submit" class="btn btn-success">Guardar</button>
                                        <button type="button" onclick="myFunction()" value="Reset form" class="btn btn-danger">Cancelar</button>
                                      </p>
                        </div>
                        <hr class="mb-2">
                        </div>
                        </div>
                        
                      </form>
                      <div>
</div>     
                </div>

                <div class="col-md-5">
                <div class="card">
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
      
     <!-- <script>
var options = {
		color : ["red","green","blue"],
		country : ["Spain","Germany","France"]
}

$(function(){
	var fillSecondary = function(){
		var selected = $('#categ').val();
		$('#serv').empty();
		options[selected].forEach(function(element,index){
			$('#serv').append('<option value="'+element+'">'+element+'</option>');
		});
	}
	$('#categ').change(fillSecondary);
	fillSecondary();
});
</script>-->
<script>
$(document).ready(function(){
    function loadCareer() {
        var faculty_id = $('#categ').val();
        if ($.trim(faculty_id) != '') {
            $.get('careers/', {faculty_id: faculty_id}, function (careers) {

                var old = $('#serv').data('old') != '' ? $('#serv').data('old') : '';

                $('#serv').empty();
                $('#serv').append("<option value=''>Selecciona una carrera</option>");

                $.each(careers, function (index, value) {
                    $('#serv').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                })
            });
        }
    }
    loadCareer();
    $('#categ').on('change', loadCareer);
});
</script>

    @endsection

<!--@section('script')
<script>
  $(document).ready(function(){
      $("#categ").on("change", function() {
        var categ_id = $(this).val();
        console.log("servicio");
        if ($.trim(categ_id) != '') {
            $.get("select", {categ_id: categ_id}, function (servicios) {
             console.log("servicio");
              $("#serv").empty();
              $("#serv").append("<option value="">selecciona una...</option>");
              $.each(servicios, function (index, value) {
                $("#serv").append("<option value='" + index + "'>"+ value +"</option>");
              })
            });
        } 
            
      });
  });
</script> 


      
@endsection-->
