<?php
/**
 * funcion que calcula la superficie de un circulo 
 * @param float $radio
 * @param float $area
 * @return float
 */
    function calcularSuperficieCirculo($radio){
        $area=M_PI*pow($radio, 2);
        return $area;
    }
/**
 * Funcion que calcula la superficie de la corona circular
 * @param float $radioMayor
 * @param float $radioMenor
 * @param float $area
 */
    function calcularSuperficieCorona($radioMayor, $radioMenor){
        $area=M_PI*(pow($radioMayor,2)-pow($radioMenor, 2));
        return $area;
    }
/*PROGRAMA PRINCIPAL
CALCULA EL AREA DEL LA CORONA CIRCULAR */
