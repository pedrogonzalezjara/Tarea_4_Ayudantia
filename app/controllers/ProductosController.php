<?php

class ProductosController extends BaseController {

    protected $layout = 'layouts.master';
    
    public function getAdd()
    {
        return $this->layout->content = View::make('productos.add');
    }
    public function postAdd()
    {
        $inputs=Input::All();
        $reglas=array
            (
                'nombre'=>'required|min:5',
                'codigo'=>'required|min:5',
                'precio'=>'required|integer',
                'bodega'=>'required'
            );
        $mensajes=array
            (
                "required"=>"este campo es obligatorio",
                "min"=>"debe tener como minimo 5 caracteres",
                "integer"=>"ingrese solo numeros"
            
            );
        $validar=Validator::make($inputs,$reglas,$mensajes);
        if($validar->fails())
        {
            return Redirect::back()->withErrors($validar);
        }
        else
        {
               $inputs=Input::All();
               $n= new Productos;
               $n->nombre_producto = $inputs["nombre"];
               $n->codigo_producto = $inputs["codigo"];
               $n->precio_neto = $inputs["precio"];
               $n->fk_bodega_id = $inputs["bodega"];
               $n->save();
               Session::flash('mensaje', 'su registro se ingresó correctamente');
               return Redirect::to('productos/add');
        }
    }
    public function get_editar($id = null) {
        $datos = Productos::find($id);
        return $this->layout->content = View::make('productos/editar', compact("datos"));
    }
    public function post_editar()
    {
        $inputs=Input::All();
        $reglas=array
            (
                'nombre'=>'required|min:5',
                'codigo'=>'required|min:5',
                'precio'=>'required|integer',
                'bodega'=>'required'
            );
        $mensajes=array
            (
                "required"=>"este campo es obligatorio",
                "min"=>"debe tener como minimo 5 caracteres",
                "integer"=>"ingrese solo numeros"
            
            );
        $validar=Validator::make($inputs,$reglas,$mensajes);
        if($validar->fails())
        {
            return Redirect::back()->withErrors($validar);
        }
        else
        {
            $editar = Productos::find($inputs['id']);
            $editar->nombre_producto = $inputs["nombre"];
            $editar->codigo_producto = $inputs["codigo"];
            $editar->precio_neto = $inputs["precio"];
            $editar->fk_bodega_id = $inputs["bodega"];
            $editar->save();
            Session::flash('mensaje', 'su registro se actualizó correctamente');
            return Redirect::to('productos/editar');
        }
    }
    public function getDelete($id = null) {
        $borrar = Productos::find($id);
        $borrar->delete();
        return Redirect::to('test/index');
    }
    

        
    
}
    
    
 

 

 
