
<h1>Actualizar Bodega </h1>

  
    <div class="alert-box success">
    </div>
    <h2>{{ Session::get('mensaje') }}</h2>
     {{Form::open(array('url' => 'test/editar/','method'=>'post'))}}
    
    <p>
Nombre:     {{Form::text("nombre")}} {{$errors->first("nombre")}}
    </p>
    <p>
Codigo:     {{Form::text("codigo")}}{{$errors->first("codigo")}}
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


