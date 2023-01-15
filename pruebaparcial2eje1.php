<?php
/**
 * esnroElegido2
 * @param int $num;
 * @return boolean
 */
function esNroElegido2($num){
    $umbral=((int)($num/2))+1;
    $bandera=true;

    $i=2;

    while($bandera && $i<$umbral){
        $bandera=!(($num % $i) == 0);
        $i++;

    }
    return $bandera;

}

$numero=esNroElegido2(1);
if($numero==true){
    
    echo "verdadero";
}else{
    
echo "falso";
}