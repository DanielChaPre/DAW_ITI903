<?php
//------------------
/*includes*/
/*include_once('1P_AI9_BDConnection.php');
$conexion = new BDConnection();
$conexion->cerrarConexion();*/

include_once('1P_AI9_Usuario.php');

/*
Insertar usuario
$mUsuario = new Usuario();

$mUsuario->nombre = "Lucky";
$mUsuario->edad = 4;*/
//$mUsuario->save();


//Consultar un usuario
$mUsuario = Usuario::find(4);

//Actualizar
/*if(isset($mUsuario)){
    $mUsuario->nombre = "LuckyPerro";
    $mUsuario->edad = 5;
    $mUsuario->save();
}*/

//Eliminar
/*if(isset($mUsuario)){
    $mUsuario->delete();
}*/

//Consultar todo
$mUsuarios = Usuario::GetAll();
//echo var_dump($mUsuarios);

