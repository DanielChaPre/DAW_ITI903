<a href="index.php">Inicio </a> <br><br>

<?php

///////////////

/*
* Declaracion de funciones
*/
//-----------------------
function imprimirSalto(){
    echo "<strong> Impresion desde funcion</strong>";
    echo "<br><hr>";
}

imprimirSalto();
//-----------------------
function imprimirTitulo($titulo){
    echo "<strong> $titulo</strong>";
    echo "<br><hr>";
}
//-----------------------
imprimirTitulo("Impresion con parametro");
//-----------------------
function getTitulo2($titulo){
    return "<strong> $titulo</strong><br><hr>";
}

$html = getTitulo2("Impresion con parametro 2");
echo $html;
//-----------------------
function getTitulo3($titulo){
    echo "Previo al titulo <br>";
    return "<strong> $titulo</strong><br><hr>";
}

$html = getTitulo3("Impresion con parametro 3");
echo $html;
//-----------------------
function getTitulo4($titulo = "Titulo por default"){
    return "<strong> $titulo</strong><br><hr>";
}

$html = getTitulo4("Impresion con parametro x");
echo $html;

//-----------------------

imprimirTitulo("Pasar por valor");
$numero = 1;
function SumarUno($numeroEnter){
    $numeroEnter++;
   
}

SumarUno($numero);
echo $numero. "<br>";

//-----------------------

imprimirTitulo("Pasar por valor por referencia");
$numero = 1;
function SumarUnoPorReferencia(&$numeroEnter){
    $numeroEnter++;
   
}

SumarUnoPorReferencia($numero);
echo $numero;