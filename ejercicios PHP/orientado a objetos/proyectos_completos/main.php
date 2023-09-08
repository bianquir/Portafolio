<?php
require_once "Calculadora.php";
require_once "Conversor.php";

echo ("<h4>CALCULADORA</h4>");
$operacion= new Calculadora;
$operacion->sumar(10,20);
$operacion->resta(10,20);

echo ("<h4>CONVERSOR</h4>");
$conver= new Conversor;
$conver->convertir(50, "dolar");
$conver->convertir(20, "euro");
$conver->convertir(150, "uru");

?>