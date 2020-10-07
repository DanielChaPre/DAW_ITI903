<?php
//------------------

class Persona {
    public $nombre;
    public $edad;
    public static $mayoriaEdad = 18;

    public function Saluda(){
        echo "Hola, me llamo $this->nombre y tengo $this->edad años <br>";
    }

    public function getSaluda(){
        return "Hola, me llamo $this->nombre y tengo $this->edad años <br>";
    }

    public function responde($nombreInterlocutor){
        echo "Mucho gusto $nombreInterlocutor, yo me llamo $this->nombre y tengo $this->edad años <br>";
    }

    public function preguntarEdad(){
        $edadIn = $this->edad + 5;
        echo "Tengo $this->edad años. 
        tu pareces de $edadIn años <br>";
    }

    public function responderEdad($edadInterlocutor){
        $edadIn = $edadInterlocutor - 1;
        echo "No manches, tengo $this->edad años.";
    }

    public function retornarEdad(&$edadEntrada){
        $edadEntrada = $this->edad;
        
    }

    public static function imprimeMayo(){
       echo "Mensaje desde funcion estatica <br>";
    }

    public static function retornaEstatico(){
       return self::$mayoriaEdad;
     }


}