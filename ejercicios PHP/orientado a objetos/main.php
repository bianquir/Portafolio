<?php
require_once "cachorro.php";
require_once "Perro.php";
require_once "circulo.php";
require_once "estudiante.php";
require_once "Persona.php";


//3. Crea un objeto de la clase `Cachorro`, asigna valores a sus atributos y muestra información sobre él.
echo("<h4>Mostrar cachorro</h4>");
$cachorro= new Cachorro("Toby", "Labrador");
print_r($cachorro);

echo("<h4>Calcular radio de un circulo</h4>");
$radioCirculo= new Circulo("5");
$radioCirculo->calcular("5");
print_r($radioCirculo);

echo("<h4>Mostrar estudiante</h4>");
$estudiante= new Estudiante("Maria", "18");
print_r($estudiante);

echo("<h4>Mostrar persona</h4>");
$persona= new Persona("Maria", "Quiroga", "4429097");
print_r($persona);

?>