<?php
/**
 * Funcion para calcular el perimetro de un triangulo equilatero
 * @param float $lado
 * @param float $perimetro
 * @return float 
 */
    function calcularPerimetroTriangulo($lado){
        $perimetro=$lado*3;
        return $perimetro;
    }
/**
 * Funcion para calcular la altura de un triagunlo equilatero
 * @param float $lado
 * @param float $altura
 * @return float
 */
    function calcularAlturaTriangulo($lado){
        $altura=sqrt(pow($lado,2)-pow(($lado/2),2));
        return $altura;
    }
/**
 * Funcion para calcular el area de un triangulo equilatero
 * @param float $lado
 * @param float $area
 * @return float
 */

    function calcularAreaTriangulo($lado){
        $area=(pow($lado,2)*sqrt(3))/4;
        return $area;
    }
/* PROGRAMA PRINCIPAL   
Este sistema realizara los calculos para conocer las medidad de un triangulo equilatero mediante la entrada del lado
Float perimetoTriangulo, areatriangulo, alturatriangulo,  lado
*/
    echo "Ingrese el valor del lado del triaungulo equilatero: ";
    $lado=trim(fgets(STDIN));
    $perimetroTriangulo=calcularPerimetroTriangulo($lado);
    $alturaTriangulo=calcularAlturaTriangulo($lado);
    $areaTriangulo=calcularAreaTriangulo($lado);

    echo "Dado el triangulo equilatero de lado ". $lado." cm, su perimetro es de ".$perimetroTriangulo." cm y su area es ". $areaTriangulo."cm2";



