<?php 
/* Elaborar un programa que lea un número de 3 cifras y determine si es o no capicúa. Un número es 
capicúa si es igual al revés del número. Si el número no es de tres cifras muestre en pantalla un 
cartel de error. 

PROGRAMA PRINCIPAL comprobarCapicua
    (*Este programa comprobora si el numero ingresado es capicua*)
    ENTERO numero, digito1, digito3
    ESCRIBIR ("Ingrese su numero de 3 cifras: ")
    LEER (numero)   
    SI (numero<=99 AND numero>=1000) ENTONCES
        ESCRIBIR (numero, " ERROR, debe ser un numero de 3 dígitos")
    SINO
            digito1<-numero MOD 10
            digito3<-numero MOD 1000 / 100
            SI (digito1==digito3)
                ESCRIBIR (numero, " Es capicua")
            SINO
                ESCRIBIR (numero, " No es capicua")
            FIN SI
    FIN SI
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
//PROGRAMA PHP comprobarCapicua
//Segun el numero entero ingresado de 3 cifras se conproboara si es capicua
//ENTERO $numero, digito1, digito2
echo "Ingrese un numero de 3 cifras por favor: ";
$numero=trim(fgets(STDIN));

if($numero <=99 || $numero>=1000){
    echo $numero." ERROR, deber ser un numero de 3 dígitos";
}else{
    $digito1=$numero%10;
    $digito2=(int)(($numero%1000)/100);
    if($digito1==$digito2){
        echo $numero." Es capicua";
    }else{
        echo $numero." No es capicua";
    }
}
