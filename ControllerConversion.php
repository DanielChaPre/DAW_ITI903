<?php
class ControllerConversion {
    public $val;
    public $x1;
    public $x2;
    public $accion;
    public $resultado;

    function __construct(){
        $this->val = 0;
        $this->x1 = "";
        $this->x2 = "";
        $this->accion = "";
        $this->resultado = 0;
    }


    function cacharParametros(){
        if(isset($_GET["val"])){
            $this->val = $_GET["val"];
        }
        if(isset($_GET["x1"])){
            $this->x1 = $_GET["x1"];
        }
        if(isset($_GET["x2"])){
            $this->x2 = $_GET["x2"];
        }
        if(isset($_GET["accion"])){
            $this->accion = $_GET["accion"];
        }
    }

    public function ejecutarOperacion(){
        switch($this->accion){
            case "convertir":
                $this->calcular();
            break;
            break;
            default: break;
        }
    }

    function calcular(){
        $origen = $_GET["x1"];

        //echo $origen;

        switch ($origen) {
            case 'Centrimetro':
                if($this->x2 == "metro" || $this->x2 == "pulgada"||$this->x2 == "yarda"){
                    switch ($this->x2) {
                        case 'metro':
                            $this->resultado = ($this->val/100);
                        break;
                        case 'pulgada':
                             $this->resultado = ($this->val*0.39370);
                            break;
                        case 'yarda':
                            $this->resultado = ($this->val*0.010936);
                        break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
                break;
            case 'metro':
                if($this->x2 == "Centrimetro" || $this->x2 == "pulgada"||$this->x2 == "yarda"){
                    switch ($this->x2) {
                        case 'Centrimetro':
                            $this->resultado = ($this->val*100);
                        break;
                        case 'pulgada':
                             $this->resultado = ($this->val*39.370);
                            break;
                        case 'yarda':
                            $this->resultado = ($this->val*1.0936);
                        break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
            break;
            case 'pulgada':
                if($this->x2 == "metro" || $this->x2 == "Centrimetro"||$this->x2 == "yarda"){
                    switch ($this->x2) {
                        case 'metro':
                            $this->resultado = ($this->val/39.370);
                        break;
                        case 'Centrimetro':
                             $this->resultado = ($this->val/0.39370);
                            break;
                        case 'yarda':
                            $this->resultado = ($this->val*0.027778);
                        break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
                break;
            case 'yarda':
                if($this->x2 == "metro" || $this->x2 == "pulgada"||$this->x2 == "Centrimetro"){
                    switch ($this->x2) {
                        case 'metro':
                            $this->resultado = ($this->val/1.0936);
                        break;
                        case 'pulgada':
                             $this->resultado = ($this->val*36);
                            break;
                        case 'Centrimetro':
                            $this->resultado = ($this->val/0.010936);
                        break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
            break;
            case 'gramo':
                if($this->x2 == "Kilogramo" || $this->x2 == "onza"){
                    switch ($this->x2) {
                        case 'Kilogramo':
                            $this->resultado = ($this->val/1000);
                        break;
                        case 'onza':
                             $this->resultado = ($this->val*0.035274);
                            break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
                break;
            case 'Kilogramo':
                if($this->x2 == "gramo" || $this->x2 == "onza"){
                    switch ($this->x2) {
                        case 'gramo':
                            $this->resultado = ($this->val/0.0010000);
                        break;
                        case 'onza':
                             $this->resultado = ($this->val*35.274);
                            break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
            break;
            case 'onza':
                if($this->x2 == "gramo" || $this->x2 == "Kilogramo"){
                    switch ($this->x2) {
                        case 'gramo':
                            $this->resultado = ($this->val/0.035274);
                        break;
                        case 'Kilogramo':
                             $this->resultado = ($this->val/35.274);
                            break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
                break;
            case 'litros':
                if($this->x2 == "mililitros" || $this->x2 == "metro cubico"){
                    switch ($this->x2) {
                        case 'mililitros':
                            $this->resultado = ($this->val/0.0010000);
                        break;
                        case 'metro cubico':
                             $this->resultado = ($this->val/1000.0);
                            break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
                break;
            break;
            case 'mililitros':
                if($this->x2 == "litros" || $this->x2 == "metro cubico"){
                    switch ($this->x2) {
                        case 'litros':
                            $this->resultado = ($this->val/1000);
                        break;
                        case 'metro cubico':
                             $this->resultado = ($this->val/1000000);
                            break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
                break;
            case 'metro cubico':
                if($this->x2 == "litros" || $this->x2 == "mililitros"){
                    switch ($this->x2) {
                        case 'litros':
                            $this->resultado = ($this->val/0.0010000);
                        break;
                        case 'mililitros':
                             $this->resultado = ($this->val/0.0000010000);
                            break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    $this->resultado = "No coincide con la conversión";
                }
            break;
            default:
                # code...
                break;
        }
    }

}


