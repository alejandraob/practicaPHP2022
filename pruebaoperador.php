<?php
echo "Ingrese nro ";
$nr=trim(fgets(STDIN));
$numerador1=1;
$denominador1=1;
$numerador2=1;
$denominador2=0;
$numeradorActual=0;
$denominadorActual=0;
$sumaNro=0;
for($i=0; $i<$nr; $i++){
     // echo "contador I ->".$i."\n";
    $numeradorActual=$numerador1+$numerador2;
  //  echo "Numerador Actual ->".$numeradorActual."\n";
    $denominadorActual=$denominador1+$denominador2;
   // echo "Denominador Actual ->".$denominadorActual."\n";
    
    $sumaNro=$sumaNro+($numeradorActual/$denominadorActual);

    $numerador2=$numerador1;
    $denominador2=$denominador1;

    $numerador1=$numeradorActual;
    $denominador1=$denominadorActual;

}
echo "La sumatoria es: ".$sumaNro;

