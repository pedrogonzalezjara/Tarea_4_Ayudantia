<?php

class TestController extends BaseController {

    protected $layout = 'layouts.master';
    
    public function getAdd()
    {
        return $this->layout->content = View::make('test.add');
    }
    public function getIndex()
    {
        $datos = Bodega::all();
        $prod = Productos::all();
        return $this->layout->content = View::make('test/index',compact("datos","prod"));
    }
    public function postAdd()
    {
        $inputs=Input::All();
        $reglas=array
            (
                'nombre'=>'required|min:5',
                'codigo'=>'required|min:5' 
            );
        $mensajes=array
            (
                "required"=>"este campo es obligatorio",
                "min"=>"debe tener como minimo 5 caracteres"
            
            );
        $validar=Validator::make($inputs,$reglas,$mensajes);
        if($validar->fails())
        {
            return Redirect::back()->withErrors($validar);
        }
        else
        {
               $inputs=Input::All();
               $n= new Bodega;
               $n->nombre_bodega = $inputs["nombre"];
               $n->codigo_bodega = $inputs["codigo"];
               $n->save();
               Session::flash('mensaje', 'su registro se ingresó correctamente');
               return Redirect::to('test/add');
        }
    }
    public function get_editar($id = null) {
        $datos = Bodega::find($id);
        return $this->layout->content = View::make('test/editar', compact("datos"));
    }
    public function post_editar()
    {
        $inputs=Input::All();
        $reglas=array
            (
                'nombre'=>'required|min:5',
                'codigo'=>'required|min:5'           
            );
        $mensajes=array
            (
                "required"=>"este campo es obligatorio",
                "min"=>"debe tener como minimo 5 caracteres"
            
            );
        $validar=Validator::make($inputs,$reglas,$mensajes);
        if($validar->fails())
        {
            return Redirect::back()->withErrors($validar);
        }
        else
        {
            $editar = Bodega::find($inputs['id']);
            $editar->nombre_bodega = $inputs["nombre"];
            $editar->codigo_bodega = $inputs["codigo"];
            $editar->save();
            Session::flash('mensaje', 'su registro se actualizó correctamente');
            return Redirect::to('test/editar');
        }
    }
    public function getDelete($id = null) {
        $borrar = Bodega::find($id);
        $borrar->delete();
        return Redirect::to('test/index');
    }
    

        
    
}
    
    
 

 

 
