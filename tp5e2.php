<?php 
/*  Especificar un módulo que a partir de dos números (num1, num2) retorne true si el primero es 
mayor al segundo (num1>num2), false caso contrario. 

MODELO EN PSEUDOCÓIGO 

    MODULO esMayor (ENTERO n1, n2) RETORNO STRING 
    STRING resultado
    SI (n1>n2) ENTONCES
        resultado<-("El numero ", n1 , " es mayor que ", n2)
        RETORNO  ESCRIBIR (resultado)
    SINO 
        resultado<-(("El numero ", n1 , " es menor que ", n2)
        RETORNO  ESCRIBIR (resultado)
    FIN SI
FIN MODULO
PROGRAMA PRINCIPAL COMPROBARNumero
    (*Este programa comprobora si los dos numeros enteros ingresados si uno es mayor que el otro*)
    ENTERO num1, num2
    ESCRIBIR ("Ingrese el primero numero entero: ")
    LEER (num1)
    ESCRIBIR ("Ingrese el segundo numero entero: ")
    LEER (num2)    
    ESCRIBIR (esMayor(num1, num2))
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
/**
 * Este modulo realizara la funcion de comprobar si el primer numero ingresado es mayor o menor que el segundo numeor ingresado
 * @param int $n1
 * @param int $n2
 * @param string $resultado
 * @return string
 */
function esMayor($n1, $n2){

    if($n1>$n2){
        $resultado="El numero ". $n1 . " es mayor que ". $n2;
        return $resultado;
    }else{
        $resultado="El numero ". $n1 . " es menor que ". $n2;
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
echo esMayor($num1, $num2);
