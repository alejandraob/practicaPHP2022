<?php
/**
 * Calacula si el numero es multiplo de 2
 * @param int $numero
 * @param int $multiplo
 * @return string
 * 
 */
function esMultiplode2($numero){
    $multiplo=$numero%2==0? $numero."  Es multiplo de 2 ": $numero."  No es multiplo de 2 ";
    return $multiplo;
}
//Programa principal
/*Programa que calcula si un numero es multiplo de 2 */
echo "Ingrese el numero para si es multiplo de 2 : ";
$num=trim(fgets(STDIN));

$verificar=esMultiplode2($num);
 $num;
echo $verificar;