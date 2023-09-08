<?php
include "estructurasDeControl.php";

//definir variable y asignar numero
$numero= 18;

//definir constante y asignar URL
define("URL", "https://www.instagram.com");

//crea una funcion suma que reciba 2 parametros 
function suma($numero1, $numero2){
    $resultado=$numero1+$numero2;
    echo ("La suma de los numeros $numero1 y $numero2 da como resultado: ".$resultado. "<br>");
}
echo("<h4>Funcion para sumar</h4>");
suma(10, 7);

//declarar una variable y asignarle una cadena de texto
$frase="hola como estas";
echo("<h4>Muestra frase en pantalla</h4>");
echo $frase;
echo ("<br>");

//definir constante 
define("TAZA_CAMBIO", 20);

//Crea una función llamada esPar que tome un número como argumento y devuelva true si es par y false si es impar.

function esPar($num){
    if(($num % 2) == 0){
        echo ("True");
    }else{
        echo("False");
    }
}
echo ("<h4>Funcion Par o Impar (True=Par/False=Impar)</h4>");
esPar(18);
echo ("<br>");

//Declara una variable llamada $lista y asígnale un array con tres elementos.
$lista=["hola", 20, 8];

//Define una constante llamada HORAS_DIA y asigna el valor 24.
define("HORAS_DIA", 24);

//Crea una función llamada calcularArea que tome dos argumentos (base y altura) y devuelva el área de un triángulo.
function calcularArea($base, $altura){
    $resultado=$base*$altura;
    echo "El area del triangulo es: ".($resultado);
}
echo("<h4>Area de un triangulo</h4>");
calcularArea(4, 2);
echo ("<br>");

//Declara una variable llamada $frutas y asígnale un array asociativo con nombres de frutas como claves y sus precios como valores.
$frutas= [
    "Pera"=> 20,
    "Manzana"=> 30,
    "Frutilla"=>500
];



$animales=["perro", "gato", "loro", "koala", "jirafa", "mono", "pato", "tigre", "huron", "conejo"];
obtenerAnimalesFavoritos($animales);
?>