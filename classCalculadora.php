<?php

class ClassMatematica
{

    public static function somar($num1,$num2){
        $soma = $num1 + $num2;
        return $soma;
    }
    
    public static function dividir($num1, $num2){
        $div = $num1 / $num2;
        return $div;
    }

    public static function multiplicar($num1, $num2){
        $mult = $num1 * $num2;
        return $mult;
    } 

    public static function subitrair($num1, $num2){
        $subt = $num1 - $num2;
        return $subt;
    }
}

?>