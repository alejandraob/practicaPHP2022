<?php 
/* Se necesitar especificar un módulo para utilizar en el software de selección de personal de una empresa. 
La selección consiste en buscar una persona:
a) sexo masculino, menor de 25 años con secundario completo , O BIEN, 
b) sexo femenino, edad entre 30 y 40 años con secundario completo. 
 
Cuando se presenta una persona se invoca al módulo con el sexo, edad y si tiene secundario completo (si/no). 
El módulo debe retornar true (Verdadero) si la persona cumple las condiciones, false (Falso) en caso contrario.
Un encargado de la empresa utilizará un programa principal donde ingresará los datos y obtendrá la respuesta: 
“Seleccionado” o “No cumple los requisitos”

MODELO EN PSEUDOCÓIGO 

    MODULO clasificacionPersonal (ENTERO edad, STIRNG genero, estudios) RETORNO STRING 
        ENTERO edad
        STRING genero, estudios, resultado

        SI(genero=="masculino" AND edad<25 AND estudios=="si" OR genero=="femenino" AND edad>=30 AND edad<=40 AND estudios=="si" )ENTONCES
            resultado<-"Seleccionado"
            RETORNO resultado
            SINO
            resultado<-"No cumple con los requisitos"
            RETORNO resultado
    FIN MODULO 

PROGRAMA PRINCIPAL seleccionPersonal
    (*Con los datos ingresados de los postulantes, el sistema determinara quien queda seleccionado para la empresa*)
    STRING sexo, educacion, respuesta
    ENTERO edad
    ESCRIBIR ("Ingrese el sexo femenino/masculino: ")
    LEER (sexo)
    ESCRIBIR ("ingrese la edad: ")
    LEER(edad)
    ESCRIBIR("estudios secundarios completos si/no: ")
    LEER(educacion)
    respuesta<-clasificacionPersonal(edad, sexo, educacion)
     ESCRIBIR("respuesta")
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
//Este programa seleccionara un nuevo personal segun los requisitos de la empresa
/**
 * Funcion clasificacionPersonal
 * @param string $genero
 * @param string $estudios
 * @param string $resultado
 * @param int $edad
 * @return string
 */
function clasificacionPersonal ($edad, $genero, $estudios){  
    if ($genero=="masculino" && $edad<25 && $estudios=="si" || $genero=="femenino" && $edad>=30 && $edad<=40 && $estudios=="si") {
        $resultado="Seleccionado";
        return $resultado;
    } else {
      
        $resultado="No cumple con los requisitos";
        return $resultado;
    }
}
/*PROGRAMA PRINCIPAL 
Con los datos ingresados de los postulantes, el sistema determinara quien queda seleccionado para la empresa
*/
//PROGRAMA PRINCIPAL seleccionPersonal
//STRING sexo, educacion, respuesta
//ENTERO edad
echo "Ingrese el sexo femenino/masculino: ";
$sexo=trim(fgets(STDIN));
echo "ingrese la edad: ";
$edad=trim(fgets(STDIN));
echo "estudios secundarios completos si/no: ";
$educacion=trim(fgets(STDIN));
$respuesta=clasificacionPersonal($edad, $sexo, $educacion);
echo $respuesta;


