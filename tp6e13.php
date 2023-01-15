<?php
/*Este programa muestra la secuencia de fibonacci a partir de un numero determinado por el usuario
Declaracion de variables
Enteros $num, $nFibonnaci, $i, $fibonacciAnterior1, $fibonacciAnterior2*/
$nFibonnaci=1;
$fibonacciAnterior1=0;
$fibonacciAnterior2=0;

echo "Ingrese un numero: ";
$num=trim(fgets(STDIN));

for ($i=0; $i < $num ; $i++) { 
    $fibonacciAnterior2=$fibonacciAnterior1;
    $fibonacciAnterior1=$nFibonnaci;
    $nFibonnaci=$fibonacciAnterior1+$fibonacciAnterior2;
    echo $fibonacciAnterior1." ";

 }
 ?>