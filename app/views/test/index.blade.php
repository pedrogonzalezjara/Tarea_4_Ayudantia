@extends('layouts.master')


@section('content')
<h1>Control Bodega</h1><hr>
<h2>Listado de Bodegas</h2>
<ul>
    @foreach($datos as $dato)
    <li>Nombre :  <?php echo $dato->nombre_bodega; ?></br>
    <?php echo HTML::link("test/editar/" . $dato->id, 'Actualizar') ;?>
     <?php echo HTML::link('test/delete/' . $dato->id,'Eliminar'); ?>
    @endforeach
</ul>
<hr>
<h2>Listado de Productos</h2>
<ul>
    @foreach($prod as $dato)
    <li> Nombre      :      <?php echo $dato->nombre_producto;  ?></br>
        Precio Neto :      <?php echo $dato->precio_neto;?></br>
               
        <?php echo HTML::link("productos/editar/" . $dato->id, 'Actualizar') . " " ?> 
        <?php echo HTML::link('productos/delete/' . $dato->id,'Eliminar'); ?>
    @endforeach
</ul>
<hr>
{{Form::open(array('url' => 'test/add/','method'=>'get'))}}
{{Form::submit("Agregar Bodega")}}
{{Form::close()}}
{{Form::open(array('url' => 'productos/add/','method'=>'get'))}}
{{Form::submit("Agregar Producto")}}
{{Form::close()}}
   

    
    