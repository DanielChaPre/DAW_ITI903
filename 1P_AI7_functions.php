<?php
//------------------

/*
* Declaracion de funciones
*/
//-----------------------
function imprimirSalto(){
    echo "<strong> Impresion desde funcion</strong>";
    echo "<br><hr>";
}

//-----------------------
function imprimirTitulo($titulo){
    echo "<strong> $titulo</strong>";
    echo "<br><hr>";
}
//-----------------------
//-----------------------
function getTitulo2($titulo){
    return "<strong> $titulo</strong><br><hr>";
}
//-----------------------
function getTitulo3($titulo){
    echo "Previo al titulo <br>";
    return "<strong> $titulo</strong><br><hr>";
}
//-----------------------
function getTitulo4($titulo = "Titulo por default"){
    return "<strong> $titulo</strong><br><hr>";
}

//-----------------------

$numero = 1;
function SumarUno($numeroEnter){
    $numeroEnter++;
   
}

//-----------------------
$numero = 1;
function SumarUnoPorReferencia(&$numeroEnter){
    $numeroEnter++;
   
}