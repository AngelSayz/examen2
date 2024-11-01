<?php

class Vendedor {
    private $id;
    private $nombre;
    private $email;
    private $phone;

    // Constructor
    public function __construct($id = null, $nombre = null, $email = null, $phone = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->phone = $phone;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
}
