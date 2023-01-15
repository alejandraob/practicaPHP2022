<?php
/**
 * Crea funciones de linea de Banda
 * @param string $lineaBanda
 *  
 */
function crearCartelLineaBanda(){
    // string $lineaBanda
    $lineaBanda="+------------------+------------------+";
    echo $lineaBanda."\n";
}
/**
 * Crea funcion de campo
 * @param string $campo
 * 
 */
function crearCartelCampo(){
    // string $campo
    $campo="|                  |                  |";
    echo $campo."\n";
}
/**
 * Crea funcion de linea de Medio 2 para cancha de tenis
 * @param string $lineaMedia2
 * 
 */
function crearCartelLineaMedia2(){
    // string $lineaMedia2
    $lineaMedia2="|        |         |        |         |";
    echo $lineaMedia2."\n";
}

/* PROGRAMA PRINCIPAL
Ahora crea una un cartel con la forma de una cancha de tenis */

crearCartelLineaBanda();
crearCartelCampo();
crearCartelLineaBanda();
crearCartelLineaMedia2();
crearCartelLineaMedia2();
crearCartelLineaMedia2();
crearCartelLineaBanda();
crearCartelLineaMedia2();
crearCartelLineaMedia2();
crearCartelLineaMedia2();
crearCartelLineaBanda();
crearCartelCampo();
crearCartelLineaBanda();