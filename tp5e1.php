<?php 
/* Especificar un módulo esPar cuya entrada es un número y el retorno es true si el número ese par, 
false caso contrario. 
MODELO EN PSEUDOCÓIGO 

    MODULO esPar (ENTERO numero) RETORNO STRING 
    STRING resultado
    SI (numero MOD 2 ==0) ENTONCES
        resultado<-("El numero ", numero, "ES par")
        RETORNO  ESCRIBIR (resultado)
    SINO 
        resultado<-("El numero ", numero, "ES par")
        RETORNO  ESCRIBIR (resultado)
    FIN SI
FIN MODULO
PROGRAMA PRINCIPAL COMPROBARPAR
    (*Este programa comprobora si el numero entero ingresado por el usuario es par o no*)
    ENTERO num
    ESCRIBIR ("Ingrese un nuemro entero para comprobar si es par")
    LEER (num)
    ESCRIBIR (esPar(num))
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */

/**
 * Este modulo realizara la funcion de comprobar si es par o no el numero entero ingresado por el usuario
 * @param int $numero
 * @param string $resultado
 * @return string
 */
function esPar($numero){

    if($numero%2==0){
        $resultado="El numero ".$numero." Es par";
        return $resultado;
    }else{
        $resultado="El numero ".$numero." No es par";
        return $resultado;
    }
}
/*PROGRAMA PRINCIPAL 
COmprobaremos que el numero entero ingresado por el usuario es par por lenguaje php
*/
//PROGRAMA PRINCIPAL COMPROBARPAR
//ENTERO $num
echo "Por favor ingrese un numero entero: ";
$num=trim(fgets(STDIN));
echo esPar($num);
