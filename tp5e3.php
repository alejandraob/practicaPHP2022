<?php 
/* Los exámenes finales en la universidad se aprueban obteniendo 4 o una nota superior. Especifique
un programa que dada una nota muestre por pantalla si el alumno aprobó o desaprobó. Considere 
que si la nota está fuera del rango 0 a 10 deberá mostrar un cartel de error que diga “nota inválida”. 

MODELO EN PSEUDOCÓIGO 

    MODULO verificarNota (ENTERO nota) RETORNO STRING 
    STRING resultado
    SI (nota>=4 AND nota <=10) ENTONCES
        resultado<-("Aprobo")
            RETORNO  ESCRIBIR (resultado) 
        OTRO SI (nota>=0 AND nota<4) ENTONCES
            resultado<-("desaprobo")
                RETORNO  ESCRIBIR (resultado)
        SINO
            resultado<-("Nota Invalida")
                RETORNO  ESCRIBIR (resultado)
    FIN SI
FIN MODULO
PROGRAMA PRINCIPAL examenFinal
    (*Este programa comprobora si la nota ingresada por el usuario le permitira aprobar el examen o no*)
    ENTERO nota
    ESCRIBIR ("Ingrese su nota: ")
    LEER (nota)   
    ESCRIBIR (verificarNota(nota))
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
/**
 * Este modulo realizara la funcion de comprobar si el primer numero ingresado es mayor o menor que el segundo numeor ingresado
 * @param int $nota
 * @param string $resultado
 * @return string
 */
function verificarNota($nota){
    if($nota>=4 && $nota<=10){
        $resultado="APROBO";
        return $resultado;
    }if ($nota>=0 && $nota<4) {
        $resultado="DESAPROBÓ";
        return $resultado;
    } else {
        $resultado="NOTA INVALIDA";
        return $resultado;
    }
}
/*PROGRAMA PRINCIPAL 
Verificamos que la nota del examen nos aprobo
*/
//PROGRAMA PRINCIPAL COMPROBARPAR
//ENTERO $nota
echo "Ingrese la nota de su examen para saber si aprobo o no: ";
$nota=trim(fgets(STDIN));
echo (verificarNota($nota));
