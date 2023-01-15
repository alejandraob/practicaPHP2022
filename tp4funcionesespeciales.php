<?php
/**
 * Calcula la base elevada al exponente
 * @param float $base
 * @param float $exponente
 * @param float $resultado
 * @return float 
 */
function calcularPotencia($base, $exponente){
    $resultado= pow($base, $exponente);

    return $resultado;
}
/**
 * Calcula la raiz cuadrada de un numero 
 * @param float $numero
 * @param float $raiz
 * @return float
 */
function calcularRaizCuadrada($numero){
    $raiz=sqrt($numero);

    return $raiz;
}

/**
 * Calcula el valor absoluto de un numero
 * @param float $numero
 * @param float $valorAbsoluto
 * @return float 
 */
function calcularValorAbsoluto($numero){
    $valorAbsoluto=abs($numero);
    return $valorAbsoluto;
}

/* Programa principal 
Este programa utilizara las funciones declaradas anteriormente para calcular la suma de un numero con eponente y la raiz cuadrada de un numero absoluto */

echo "Ingrese el primer numero: ";
$num1=trim(fgets(STDIN));
echo "Ingrese el segundo numero: ";
$num2=trim(fgets(STDIN));

$suma=(calcularPotencia($num1, $num2)+calcularRaizCuadrada(calcularValorAbsoluto($num1)));

echo $num1." elevado a la ". $num2." + la raiz cuadrada del valor absoluto de ". $num1 ." es: ".$suma;