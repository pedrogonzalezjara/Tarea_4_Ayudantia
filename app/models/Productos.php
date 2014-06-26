<?php

class Productos extends Eloquent
{
    protected $table = 'productos';
    public $timestamps=false;
    
    public function bodega(){
        return $this->belongsTo('Bodega');
    }
    
}

