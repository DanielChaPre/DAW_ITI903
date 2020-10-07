

<?php

class CalculadoraController{
    public $entrada;
    public $accion;
    public $resultado;
    public $pantalla;

    function __construct(){
        $this->entrada = 0;
        $this->accion = "";
        $this->resultado = 0;
        $this->pantalla = "0";
    }

    function cacharParametros(){
        if(isset($_GET["entrada"])){
            $this->entrada = $_GET["entrada"];
        }
        if(isset($_GET["pantalla"])){
            $this->pantalla = $_GET["pantalla"];
        }
        if(isset($_GET["resultado"])){
            $this->resultado = $_GET["resultado"];
        }
        if(isset($_GET["accion"])){
            $this->accion = $_GET["accion"];
        }
    }

    public function ejecutarOperacion(){
        switch($this->accion){
            case "sumar":
                $this->sumar();
            break;
            case "resta":
                $this->restar();
            break;
            case "multi":
                $this->multiplicar();
            break;
            case "divid":
                $this->dividir();
            break;
            case "reset":
                $this->reset();
            break;
            default: break;
        }
    }

    public function sumar(){
        $this->pantalla.=" + ".$this->entrada;
        $this->resultado+=$this->entrada;
    }
    public function restar(){
        $this->pantalla.=" - ".$this->entrada;
        $this->resultado-=$this->entrada;
    }
    public function multiplicar(){
        $this->pantalla.=" * ".$this->entrada;
        $this->resultado*=$this->entrada;
    }
    public function dividir(){
        $this->pantalla.=" / ".$this->entrada;
        $this->resultado/=$this->entrada;
    }

    public function reset(){
        $this->entrada = 0;
        $this->accion = "";
        $this->resultado = 0;
        $this->pantalla = "0";
    }
    
}