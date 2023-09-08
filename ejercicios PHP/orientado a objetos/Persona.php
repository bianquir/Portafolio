<?php
class Persona{
    public $nombre;
    public $apellido;
    private $dni;

    public function __construct($nombre, $apellido, $dni)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
    }

    public function getDni(){
        return $this->dni;
    }
}