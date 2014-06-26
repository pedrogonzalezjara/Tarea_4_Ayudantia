

<h1>Agregar Bodega </h1>

  <hr>
    <div class="alert-box success">
        <h2>{{ Session::get('mensaje') }}</h2>
    </div>

    <?php
    echo Form::open(array('method'=>'post','url'=>'test/add',"name"=>"form", 'files' => true));
    ?>
    
    <p>
        Nombre:</br>    {{Form::text("nombre")}} {{$errors->first("nombre")}}
    </p>
    <p>
        Codigo:</br>    {{Form::text("codigo")}} {{$errors->first("codigo")}}
    
    </p>
    
    <p>
        <hr />
            {{Form::submit("Enviar")}}
    </p>
    (<a href="{{ URL::to('/test/index') }}">Volver</a>)
    <?php
    echo Form::close();
    ?>

   



