
<h1>Actualizar Producto </h1>

  
    <div class="alert-box success">
    </div>
    <h2>{{ Session::get('mensaje') }}</h2>
     {{Form::open(array('url' => 'productos/editar/','method'=>'post'))}}
    
  <p>
        Nombre:</br>    {{Form::text("nombre")}} {{$errors->first("nombre")}}
    </p>
    <p>
        Codigo:</br>    {{Form::text("codigo")}} {{$errors->first("codigo")}}
    
    </p>
    <p>
        Precio Neto:</br>    {{Form::text("precio")}} {{$errors->first("precio")}}
    
    </p>
    <p>
        Bodega:</br>    {{ Form::select('bodega', Bodega::lists('nombre_bodega', 'id'))}}  {{$errors->first("bodega")}}
    </p>
    <p>
        <hr />
            {{Form::hidden('id',$datos['id'])}}
            {{Form::submit("Enviar")}}
    </p>
    (<a href="{{ URL::to('/test/index') }}">Volver</a>)
    <?php
    echo Form::close();
    ?>


