<?php
//5. Define una clase `Estudiante` con atributos privados para el nombre y la edad. Implementa métodos públicos para establecer y obtener estos atributos de manera segura.
class Estudiante{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
}
?>