<?php 
/*  n múltiplo de un número es otro número que lo contiene un número entero de veces. Diseñar un 
módulo que dado dos números enteros A y B, devuelva (retorrne) true si A es múltiplo de B y false
caso contrario. Por ejemplo: 28 es múltiplo de 7, por lo tanto la respuesta es true. 

MODELO EN PSEUDOCÓIGO 

    MODULO esMultiplo (ENTERO a, b) RETORNO STRING 
    STRING resultado
    SI (a MOD b = 0) ENTONCES
        resultado<-("El numero ", a , " es multiplo de ", b)
        RETORNO  ESCRIBIR (resultado)
    SINO 
        resultado<-(("El numero ", a , " no es multiplo de ", b)
        RETORNO  ESCRIBIR (resultado)
    FIN SI
FIN MODULO
PROGRAMA PRINCIPAL COMPROBARNumero
    (*Este programa comprobora si los dos numeros enteros ingresados es par del otro)
    ENTERO num1, num2
    ESCRIBIR ("Ingrese el primero numero entero: ")
    LEER (num1)
    ESCRIBIR ("Ingrese el segundo numero entero: ")
    LEER (num2)    
    ESCRIBIR (esMultiplo(num1, num2))
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
/**
 * Este modulo realizara la funcion de comprobar si el primer numero ingresado es multiplo del segunfo
 * @param int $a
 * @param int $b
 * @param string $resultado
 * @return string
 */
function esMultiplo($a, $b){

    if($a % $b == 0){
        $resultado="El numero ". $a . " ES multiplo de ". $b;
        return $resultado;
    }else{
        $resultado="El numero ". $a. " NO es multiplo de ". $b;
        return $resultado;
    }
}
/*PROGRAMA PRINCIPAL 
COmprobaremos que el primer numero entero ingresado por el usuario es mayor o menor que el segundo numero ingresado
*/
//PROGRAMA PRINCIPAL COMPROBARPAR
//ENTERO $num1 , $num2
echo "Ingrese el primero numero entero: ";
$num1=trim(fgets(STDIN));
echo "Ingrese el segundo numero entero: ";
$num2=trim(fgets(STDIN));
echo esMultiplo($num1, $num2);
