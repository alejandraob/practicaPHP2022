<?php
/* Una compañía dedicada al alquiler de automóviles, 
cobra el alquiler según los kilómetros recorridos.
a) cobra $850 hasta un máximo de 300 km de distancia recorrida. (Ejemplo: Si el auto alquilado 
recorrió 250 km, el monto a cobrar es $850)
b) Para más de 300km y hasta 1000km, cobra $850 más un monto adicional de $10.5 por cada 
kilómetro en exceso sobre 300km. (Ejemplo: Si el auto alquilado recorrió 350 km, el monto a 
cobrar es $850 + 10.5*50)
c) Para más de 1000km, cobra $850 más un monto adicional de $10.5 por cada kilómetro en exceso 
sobre 300km hasta los 1000km y $8.5 por cada kilómetro en exceso sobre 1000. (Ejemplo: Si el 
auto alquilado recorrió 1550 km, el monto a cobrar es $850 + 10.5*700+8.5*550)
Los precios ya incluyen el 21% del IVA. (Ejemplo: si el monto a pagar es $1375, entonces $238.64 
corresponden al impuesto IVA y $1136.36 corresponde al alquiler)
Especifique un programa que determine el monto a pagar por el alquiler de un vehículo y el monto 
incluido del impuesto. (Considerar la especificación de un módulo para calcular el valor del alquiler 
y otro módulo para calcular el impuesto)


MODELO EN PSEUDOCÓIGO 

    MODULO calcularValorDistancia (FLOAT km) RETORNO FLOAT 
        FLOAT valorKm
        SI (km>0 AND km<=300) ENTONCES
                valorKm<-850
                RETORNO  valorKm
            SINO 
                SI(km>300 AND km<=1000)ENTONCES
                    valorKm<-((km-300)*10.5)+850
                    RETORNO  valorKm
                    SINO
                    valorKm<-((km-300)*10.5)+((km-1000)*8.5)+850
                    RETORNO valorKm
                FIN SI
        FIN SI
    FIN 

    MODULO calcularImpuesto (FLOAT costo) RETORNO FLOAT 
        FLOAT totalIva
        totalIva<-(costo*21)/100
        RETORNO totalIva
    FIN MODULO calcularImpuesto

PROGRAMA PRINCIPAL costoAlquilerAuto
    (*con este programa calcularemos el costo del alquiler de un auto por kilometraje + IVA*)
    FLOAT kilometros, costoTotal, valorKilometro
    ESCRIBIR ("Ingrese el kilometraje recorrido: ")
    LEER (kilometros)
    valorKilometro<- calcularValorDistancia(kilometros)
    costoTotal<-valorKilometro+calcularImpuesto(valorKilometro)
    ESCRIBIR("El monto total a pagar es de $", costoTotal, "IVA del 21%  $",calcularImpuesto(valorKilometro), "valor por kilometraje $",valorKilometro)

FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
//Comprobaremos el costo del alquiler de un auto por su kilometraje recorrido y por el 21%IVA
/**
 * PRIMERA FUNCION - FUNCION CALCULARVALORDISTANCIA
 * @param float $km
 * @param float $valorKm
 * @return float
 */
function calcularValorDistancia($km){

    if($km>0 && $km<=300){
        $valorKm=850;
        return $valorKm;
    }else{
        if ($km>300 && $km<=1000) {
            $valorKm=(($km-300)*10.5)+850;
            return $valorKm;
        } else {
            $valorKm=((($km-300)*10.5)+(($km-1000)*8.5)+850);
            return $valorKm;
        }
        
    }
}
//-----------------------
/**
 * SEGUNDA FUNCION - FUNCION CALCULARVALORIVA
 * @param float $costo
 * @param float $totalIva
 * @return float
 */
function calcularImpuesto($costo){

    $totalIva=($costo*21)/100;
    return $totalIva;
}
/*PROGRAMA PRINCIPAL 
con este programa calcularemos el costo del alquiler de un auto por kilometraje + IVA
*/
//PROGRAMA PRINCIPAL costoAlquilerAuto
//FLOAT kilometros, costoTotal, valorKilometro
echo "Ingrese el kilometraje recorrido: ";
$kilometros=trim(fgets(STDIN));
$valorKilometro= calcularValorDistancia($kilometros);
$costoTotal=$valorKilometro+calcularImpuesto($valorKilometro);
echo "El monto total a pagar es de $". $costoTotal. " IVA del 21%  $".calcularImpuesto($valorKilometro). " valor por kilometraje $".$valorKilometro;