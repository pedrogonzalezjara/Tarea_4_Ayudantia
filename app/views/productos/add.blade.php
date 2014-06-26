

<h1>Agregar Producto </h1>

<hr>
    <div class="alert-box success">
        <h2>{{ Session::get('mensaje') }}</h2>
    </div>

    <?php
    echo Form::open(array('method'=>'post','url'=>'productos/add',"name"=>"form", 'files' => true));
    ?>
    
    <p>
        Nombre:</br>    {{Form::text("nombre")}} {{$errors->first("nombre")}}
    </p>
    </p>
        Codigo:</br>    {{Form::text("codigo")}} {{$errors->first("codigo")}}
    <p>
    </p>
        Precio Neto:</br>    {{Form::text("precio")}} {{$errors->first("precio")}}
    <p>
        Bodega:</br>    {{ Form::select('bodega', Bodega::lists('nombre_bodega', 'id'))}}  {{$errors->first("bodega")}}
    </p>
    <p>
    <hr />
        {{Form::submit("Enviar")}}
    </p>
    (<a href="{{ URL::to('/test/index') }}">Volver</a>)
    <?php
    echo Form::close();
    ?>

    
 


