<a href="index.php">Inicio </a> <br><br>

<?php
//------------------
/*includes*/
include('1P_AI8_Function.php');
include('1P_AI8_Modelo.php');

Titulo("Creación de objetos");

$mPersona = new Persona();

$mPersona->nombre = "Daniel";
$mPersona->edad = 21;


echo var_dump($mPersona);

echo "<br> $mPersona->nombre tiene $mPersona->edad años";

salto();

$mPersona2 = new Persona();
$mPersona2->nombre = "Jessica";
$mPersona2->edad = 20;

echo "<br> $mPersona2->nombre tiene $mPersona2->edad años";
echo var_dump($mPersona2);

salto();

$arrPersona = ["persona1" => $mPersona, $mPersona2];
echo var_dump($arrPersona);

salto();

Titulo("Impresion desde funcion");

$mPersona->Saluda();
echo "<br>";
$mPersona2->Saluda();
echo "<br>";

salto();
Titulo("Impresion desde funcion get");
$saludo1 = $mPersona->getSaluda();
echo $saludo1;
$saludo1 = $mPersona2->getSaluda();
echo $saludo1;

salto();
Titulo("Paso de parametros Saludar");
$mPersona->Saluda();
echo "<br>";
$mPersona2->responde($mPersona->nombre);
echo "<br>";

salto();
Titulo("Paso de parametros por referencia");
$mPersona->preguntarEdad();
echo "<br>";
$mPersona2->responderEdad($mPersona->edad);

salto();
Titulo("Retornar edad");
$edadPersona = 0;
$mPersona->retornarEdad($edadPersona);

echo($edadPersona);
echo "<br>";
salto();
Titulo("Variable estatica");
$var = new Persona();
$mayoEdad = Persona::$mayoriaEdad;
echo $mayoEdad;

salto();
Titulo("Funcion estatica");
 Persona::imprimeMayo();

 salto();
Titulo("Funcion retorno estatica");
    $valor = Persona::retornaEstatico();
    echo $valor;

/*$arrayEstatico = new SplFixedArray(10);
echo var_dump($arrayEstatico);
array_push($arrayEstatico, 12);
array_reverse($arrayEstatico);*/