<?php
//2. Extiende la clase `Perro` para crear una clase llamada `Cachorro` con un atributo adicional llamado `$raza`.
require_once "Perro.php";
class Cachorro extends Perro{
    public $raza;

    public function __construct($nombre, $raza)
    {
        $this->nombre=$nombre;
        $this->raza=$raza;
    } 
    //3. Crea un objeto de la clase `Cachorro`, asigna valores a sus atributos y muestra información sobre él.
}
?>