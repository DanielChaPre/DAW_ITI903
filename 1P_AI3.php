<a href="index.php">Inicio </a> <br><br>

<?php

$dia = 29;
$mes = 10;
$año = 2020;

/*$diaN = 11;
$mesN = 12;
$añoN = 1998;*/

/*$diaN = 11;
$mesN = 12;
$añoN = 1998;*/

$diaN = 04;
$mesN = 8;
$añoN = 2019;

/*$diaN = 05;
$mesN = 10;
$añoN = 1998;*/

/*$diaN = 03;
$mesN = 10;
$añoN = 1998;*/

$anioCumplidos = 0;
/*
*
* Condición para saber la edad exacta del usuario apartir de su mes y dia de nacimiento
* en comparación al mes y dia actual
*/

if($mesN >=  $mes){ // Si el mes de nacimiento ya paso o estamos en el mes
 if($diaN >= $dia){ // Si el día de nacimiento ya paso o estamos en el día
    $anioCumplidos = $año - $añoN;
 }else{
    $anioCumplidos = ($año - $añoN) - 1;
 }
}else if ($mes > $mesN){ //Si el mes actual ya paso al mes de nacimiento 
    $anioCumplidos = $año - $añoN;
    
}else{
    $anioCumplidos = ($año - $añoN) - 1;
}

echo "tu edad es: ".$anioCumplidos." años" ;