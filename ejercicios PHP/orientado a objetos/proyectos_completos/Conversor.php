<?php
    define("DOLAR", 750);
    define("EURO", 520);
    define("URU", 10);
    class Conversor{
        public function convertir($cantidad, $moneda){

            if($moneda == "dolar"){
                $resultado=$cantidad*DOLAR;
                echo ("La conversion de $cantidad ARS a $moneda es: $resultado <br>");
            }
            if($moneda == "euro"){
                $resultado=$cantidad*EURO;
                echo ("La conversion de $cantidad ARS a $moneda es: $resultado <br>");
            }
            if($moneda == "uru"){
                $resultado=$cantidad*URU;
                echo ("La conversion de $cantidad ARS a $moneda es: $resultado <br>");
            }
        }
    }
?>