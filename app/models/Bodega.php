<?php

class Bodega extends Eloquent {

    protected $table = 'bodega';
    public $timestamps = false;

    public function productos() {
        return $this->hasMany('Productos', 'fk_bodega_id');
    }

}

