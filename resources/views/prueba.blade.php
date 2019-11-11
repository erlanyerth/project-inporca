@extends('plantilla-base')

@section('content')
<div class="container"> 

<div class="col-md-3">
   <label for="" class="control-label">Seleccione Categoria</label>
      <select name="categorias" id="categorias" class="form-control">
         <option value="">Seleccione</option>
         @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
         @endforeach
      </select>
</div>

<div class="col-md-3">
   <label for="" class="control-label">Seleccione Producto</label>
      <select name="productos" id="productos" class="form-control">
           <option value="">Seleccione Campaña</option>
       </select>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#categorias").change(function(){
      var categoria = $(this).val();
      $.get('productByCategory/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          var producto_select = '<option value="">Seleccione Porducto</option>'
            for (var i=0; i<data.length;i++)
              producto_select+='<option value="'+data[i].id+'">'+data[i].nombre_producto+'</option>';

            $("#campanas").html(producto_select);

      });
    });
  });
</script>
@endsection