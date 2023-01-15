<?php 
/* Especifique un Módulo cuyos parámetros de entrada sean la masa en kilogramos y la estatura en 
metros y retorne el IMC:
Especifique otro Módulo cuyo parámetro de entrada sea el IMC y como valor de retorno un texto 
con la clasificación de la OMS del estado nutricional de una persona según la siguiente tabla:
Clasificación IMC
Bajo Peso < 18,50
Normal 18,5 - 24,99
Sobrepeso 25,00 - 29,99
Obesidad leve 30,00 - 34,99
Obesidad media 35,00 - 39,99
Obesidad mórbida ≥40,00
Desde un programa principal, pregunte los datos de peso y altura a una persona y utilice las dos funciones 
creadas para indicarle su estado nutricional


MODELO EN PSEUDOCÓIGO 

    MODULO calcularIMC (FLOAT peso, altura) RETORNO FLOAT 
        FLOAT totalIMC
        totalIMC<-peso/POTENCIA(altura, 2)
        RETORNAR totalIMC
    FIN MODULO calcularIMC
    MODULO comprobarClasificacionIMC (FLOAT imc) RETORNO FLOAT 
        STRING resultado
        SI(imc<18.50)ENTONCES
            resultado<-"BAJO PESO, IMC", imc,"<18.50"
            RETORNO resultado
            SINO
            SI(imc>=18.5 AND imc<=24.99)ENTONCES
                resultado<-"PESO NORMAL, IMC ", imc," 18.50 - 24.99"
                RETORNO resultado
                SINO
                SI(imc>=25.00 AND imc<=29.99)ENTONCES 
                    resultado<-"SOBREPESO, IMC ", imc," 25.00 - 29.99"
                    RETORNO resultado
                    SINO 
                    SI(imc>=30.00 AND imc<=34.99)ENTONCES
                        resultado<-"OBESIDAD LEVE, IMC ", imc," 30.00 - 34.99"
                        RETORNO resultado
                        SINO 
                        SI(imc>=35.00 AND imc<=39.99)ENTONCES
                            resultado<-"OBESIDAD MEDIA, IMC ", imc," 35.00 - 39.99"
                            RETORNO resultado
                            SINO 
                            resultado<-"OBESIDAD MÓRBIDA, IMC ", imc," >=40.00"
                            RETORNO resultado
                        FIN SI
                    FIN SI
                FIN SI
            FIN SI
        FIN SI
    FIN MODULO comprobarClasificacionIMC

PROGRAMA PRINCIPAL imcCorporal
    (*Se calculara el imc de una persona con el ingreso de su pedo y estatura*)
    FLOAT peso, estatura, valorimc
    ESCRIBIR ("cual es su peso en KL: ")
    LEER (peso)
    ESCRIBIR ("cual es su estatura en mtr: ")
    LEER(estatura)
    valorimc<-calcularIMC(peso)
    comprobarClasificacionIMC(valorimc)
     ESCRIBIR("comprobarClasificacionIMC(valorimc)")
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
//Comprobaremos el imc de una persona con los datos de peso y altura
/**
 * PRIMERA FUNCION - FUNCION calcularIMC
 * @param float $peso
 * @param float $altura
 * @param float $totalIMC
 * @return float
 */
function calcularIMC ($peso, $altura){  
$totalIMC=round(($peso/pow($altura, 2)), 2);
return $totalIMC;
}
//-----------------------
/**
 * SEGUNDA FUNCION - FUNCION MOSTRAR_TABLA_SEGUN _IMC
 * @param float $imc
 * @param string $resultado
 * @return string
 */
function comprobarClasificacionIMC($imc){
        if($imc<18.50){
            $resultado="BAJO PESO, IMC ". $imc." ref. <18.50";
            return $resultado;
        }else{
            if ($imc>=18.5 && $imc<=24.99) {
                $resultado="PESO NORMAL, IMC ". $imc." ref.  18.50 - 24.99";
                return $resultado;
            } else {
                if ($imc>=25.00 && $imc<=29.99) {
                    $resultado="SOBREPESO, IMC ".$imc." ref.  25.00 - 29.99";
                    return $resultado;
                } else {
                    if ($imc>=30.00 && $imc<=34.99) {
                        $resultado="OBESIDAD LEVE, IMC ". $imc." ref.  30.00 - 34.99";
                        return $resultado;
                    } else {
                        if ($imc>=35.00 && $imc<=39.99) {
                            $resultado="OBESIDAD MEDIA, IMC ". $imc." ref.  35.00 - 39.99";
                            return $resultado;
                        } else {
                            $resultado="OBESIDAD MÓRBIDA, IMC ". $imc." ref.  >=40.00";
                            return $resultado;
                    }
                    
                }
                
            }
            
        }
    }
}

/*PROGRAMA PRINCIPAL 
Podremos saber el IMC de una persona con sus datos de peso y altura
*/
//PROGRAMA PRINCIPAL imcCorporal
//FLOAT peso, estatura, valorimc
echo "cual es su peso en KL: ";
$peso=trim(fgets(STDIN));
echo "cual es su estatura en mtr: ";
$estatura=trim(fgets(STDIN));

$valorimc=calcularIMC($peso, $estatura);
$resultado=comprobarClasificacionIMC($valorimc);
echo $resultado;
