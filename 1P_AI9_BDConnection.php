<?php
//------------------
include_once('1P_AI9_BDConfig.php');

class BDConnection{
    public $conexion;

    function __construct(){

        try{

            $dsn = 'mysql:dbname='. BDConfig::$DBNAME . ';host='.BDConfig::$DBSERVER;
            $usuario = BDConfig::$DBUSER;
            $password = BDConfig::$DBPASSWORD;

            $this->conexion = new PDO(
                $dsn,$usuario,$password
            );
           // echo 'Si se conecto bro';
        } catch (PDOException $ex){
            echo 'Fallo en la conección: '. $ex->getMessage();

        }
    }


    function cerrarConexion(){
        $this->conexion = null;
    }

}