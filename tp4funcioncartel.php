<?php
/**
 * Crea funcion de caños
 * @param string $canios
 * 
 */
function crearCartelCanios(){
    // string $canios
    $canios="+----+             |             +----+";
    echo $canios."\n";
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
 * Crea funcion de linea de Medio
 * @param string $lineaMedia
 * 
 */
function crearCartelLineaMedia(){
    // string $lineaMedia
    $lineaMedia="|    |             |             |    |";
    echo $lineaMedia."\n";
}
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
 * Crea union de funciones
 * 
 * 
 */
function crearCartelCancha(){
        crearCartelLineaBanda();
        crearCartelCampo();
        crearCartelCampo();
        crearCartelCanios();
        crearCartelLineaMedia();
        crearCartelLineaMedia();
        crearCartelLineaMedia();
        crearCartelLineaMedia();
        crearCartelCanios();
        crearCartelCampo();
        crearCartelCampo();
        crearCartelLineaBanda();
}

//Programa principal
//crearCartelCancha();
/*
crearCartelLineaBanda();
crearCartelCampo();
crearCartelCampo();
crearCartelCanios();
crearCartelLineaMedia();
crearCartelLineaMedia();
crearCartelLineaMedia();
crearCartelLineaMedia();
crearCartelCanios();
crearCartelCampo();
crearCartelCampo();
crearCartelLineaBanda();*/