<?php
//4. Declara una clase `Círculo` con un atributo privado `$radio`. Implementa un método público para calcular el área del círculo.
class Circulo{
    private $radio;

    public function __construct($radio)
    {
        $this->radio=$radio;
    }

    public function calcular($radio){
        $this->radio*=2;
    }
}
?>