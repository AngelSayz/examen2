<?php

class Propiedad {
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $num_rooms;
    public $num_wc;
    public $num_garage;
    public $created;

    public function __construct($id, $titulo, $precio, $imagen, $descripcion, $num_rooms, $num_wc, $num_garage, $created) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
        $this->num_rooms = $num_rooms;
        $this->num_wc = $num_wc;
        $this->num_garage = $num_garage;
        $this->created = $created;
    }

}