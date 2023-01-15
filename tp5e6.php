<?php
/* Una empresa lleva el control de la productividad por mes utilizando un factor (número entero) de 
acuerdo al siguiente listado: 
enero, febrero y marzo tienen factor 15 
abril, mayo y junio factor 17 
julio y agosto factor 19 
septiembre, octubre y noviembre factor 20 
diciembre factor 21 
Especificar un módulo cuya entrada sea el nombre del mes y retorne el valor del factor.
Elaborar (Especificar) un programa que calcule la productividad de un mes dado, conociendo que la 
productividad es igual al número de artículos producidos en el mes, multiplicado por el factor que le 
corresponde al mes proporcionado. 

MODELO EN PSEUDOCÓIGO 

    MODULO esfactor (strign mes) RETORNO ENTERO 
        ENTERO resultado
        SI (mes =="enero" || mes =="febrero" || mes =="marzo" ) ENTONCES
            resultado<-15
            RETORNO  resultado
            SINO 
                SI (mes =="abril" || mes =="mayo" || mes =="junio")ENTONCES
                    resultado<-17
                    RETORNO  resultado
                    SINO
                        SI(mes =="julio" || mes =="agosto")ENTONCES
                            resultado<-19
                            RETORNO  resultado
                            SINO
                                SI(mes =="septiembre" || mes =="octubre"|| mes =="noviembre")ENTONCES
                                    resultado<-20
                                    RETORNO  resultado
                                    SINO
                                        SI(mes=="diciembre")ENTONCES
                                                resultado<-21
                                                RETORNO  resultado
                                            SINO
                                                SCRIBIR("Ingrese un mes valido")
                                        FIN SI
                                FIN SI
                        FIN SI
                FIN SI
        FIN SI
    FIN MODULO
PROGRAMA PRINCIPAL calcularProductividad
    (*Este programa comprobara la productividad de una empresa por los factores del mes indicado)
    STRING mesSleccionado
    ENTERO productividad, articulos
    ESCRIBIR ("Escriba el mes a calcular (en minuscula): ")
    LEER (mes)
    ESCRIBIR ("Ingrese la cantidad de articulos para saber la productividad: ")
    LEER (articulos)    
    productividad<-articulos*esfactor(mes)
    ESCRIBIR("La productividad del mes ", mes, " es de ", productividad, "de los ", articulos ,"articulos")
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
/**
 * Este modulo realizara la funcion de comprobar si el primer numero ingresado es multiplo del segunfo
 * @param string $mes
 * @param int $resultado
 * @return int
 */
function esfactor($mes){

    if($mes=="enero" || $mes=="febrero" || $mes=="marzo"){
        $resultado=15;
        return $resultado;
    }else{
        if ($mes=="abril" || $mes=="mayo" || $mes=="junio") {
            $resultado=17;
            return $resultado;
        } else {
            if ($mes=="julio" || $mes=="agosto" ) {
                $resultado=19;
                return $resultado;
            } else {
                if ($mes=="septiembre" || $mes=="octubre" || $mes=="noviembre") {
                    $resultado=20;
                    return $resultado;
                } else {
                    if ($mes=="diciembre") {
                        $resultado=21;
                        return $resultado;
                    } else{
                        echo "ingrese un mes valido // ";
                    }
                }
                
            }
            
        }
        
    }
}
/*PROGRAMA PRINCIPAL 
(*Este programa comprobara la productividad de una empresa por los factores del mes indicado)
STRING mesSleccionado
ENTERO preductividad, articulos
*/
//PROGRAMA PRINCIPAL productividadDeArticulosporFactorMes

echo "Escriba el mes a calcular (en minuscula): ";
$mesSeleccionado=trim(fgets(STDIN));
echo "Ingrese la cantidad de articulos para saber la productividad: ";
$articulos=trim(fgets(STDIN));

$productividad=$articulos*esfactor($mesSeleccionado);
echo "La productividad del mes ".$mesSeleccionado." es de ".$productividad. " de los ".$articulos." articulos";