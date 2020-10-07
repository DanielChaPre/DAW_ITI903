<a href="index.php">Inicio </a> <br><br>

<?php
//------------------
/*
* Llamado de funciones
*/

/*
*
*Invocamos otro archivo donde se encuentran las funciones
*
*/
include('1P_AI7_functions.php');
include_once('1P_AI7_functions.php');

//-----------------------

imprimirSalto();
//-----------------------
//-----------------------
imprimirTitulo("Impresion con parametro");
//-----------------------

$html = getTitulo2("Impresion con parametro 2");
echo $html;
//-----------------------


$html = getTitulo3("Impresion con parametro 3");
echo $html;
//-----------------------


$html = getTitulo4("Impresion con parametro x");
echo $html;

//-----------------------

imprimirTitulo("Pasar por valor");
$numero = 1;


SumarUno($numero);
echo $numero. "<br>";

//-----------------------

imprimirTitulo("Pasar por valor por referencia");
$numero = 1;

SumarUnoPorReferencia($numero);
echo $numero;

