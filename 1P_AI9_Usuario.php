<?php
//------------------
include_once('1P_AI9_BDConnection.php');

class Usuario {
    public $id;
    public $nombre;
    public $edad;

    public function save(){
        try{

            $dbConnection = new BDConnection();

            if($this->id){            
                //Update
                $sql = "UPDATE usuario set nombre = :nombre, edad =:edad WHERE id = :id";

                $statement = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
                $statement->execute();
            }else{
                //Insert
                $sql = "INSERT INTO usuario (nombre, edad) Values 
                (:nombre, :edad)";

                $statement = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->execute();
                $this->id = intval($dbConnection->conexion->lastInsertId());
               
            }
            $dbConnection->cerrarConexion();

        }catch(PDOException $ex){
            echo 'Fallo en el guardado: '. $ex->getMessage();
            exit;
        }
    }

    public function delete(){
        try{
            $dbConnection = new BDConnection();

            $sql = "DELETE from usuario where id = :id";

            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $statement->execute();

            $dbConnection->cerrarConexion();

        }catch(PDOException $ex){
            echo 'Fallo en el guardado: '. $ex->getMessage();
            exit;
        }
    }

    public static function find($id){
        try{
            $dbConnection = new BDConnection();

            $sql = "SELECT * FROM usuario WHERE id = :id";

            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();

            // 1
            $usuario = null;
            $rows = $statement->fetchAll();
            foreach($rows as $row){
                $usuario = new Usuario();
                $usuario->id = intval($row["id"]);
                $usuario->nombre = $row["nombre"];
                $usuario->edad = intval($row["edad"]);
            }
            //2
           // $usuario = $statement->fetchObject('Usuario');
            $dbConnection->cerrarConexion();

            return $usuario;
        }catch(PDOException $ex){
            echo 'Fallo la busqueda: '. $ex->getMessage();
            exit;
        }
    }

    public static function GetAll(){
        try{
            $dbConnection = new BDConnection();

            $sql = "SELECT * FROM usuario";

            $statement = $dbConnection->conexion->prepare($sql);
            $statement->execute();

            // 1
            $usuarios = [];
            $rows = $statement->fetchAll();
            foreach($rows as $row){
                $usuario = new Usuario();
                $usuario->id = intval($row["id"]);
                $usuario->nombre = $row["nombre"];
                $usuario->edad = intval($row["edad"]);
                array_push($usuarios, $usuario);
            }
            //2
           // $usuario = $statement->fetchAll(PDO::FETCH_CLASS, 'Usuario');
            $dbConnection->cerrarConexion();

            return $usuarios;
        }catch(PDOException $ex){
            echo 'Fallo la busqueda: '. $ex->getMessage();
            exit;
        }
    }

}