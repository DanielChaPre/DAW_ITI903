<?php

include_once("ControllerConversion.php");
$convertir = new ControllerConversion();
$convertir->cacharParametros();
$convertir->ejecutarOperacion();
?>


<form action="">
    <label>Valor</label>
 <input type="number" name ="val" value="" require>
 <br>
 <label>medida original</label>
    <select name="x1" id="x1">
        <option value="Centrimetro">Centrimetro</option>
        <option value="metro">metro</option>
        <option value="pulgada">pulgada</option>
        <option value="yarda">yarda</option>
        <option value="gramo">gramo</option>
        <option value="Kilogramo">Kilogramo</option>
        <option value="onza">onza</option>
        <option value="litros">litros</option>
        <option value="mililitros">mililitros</option>
        <option value="metro cubico">metro cubico</option>
    </select>
    <br>                              
 <label >medida destino</label>
 <select name="x2" id="x2">
 <option value="Centrimetro">Centrimetro</option>
        <option value="metro">metro</option>
        <option value="pulgada">pulgada</option>
        <option value="yarda">yarda</option>
        <option value="gramo">gramo</option>
        <option value="Kilogramo">Kilogramo</option>
        <option value="onza">onza</option>
        <option value="litros">litros</option>
        <option value="mililitros">mililitros</option>
        <option value="metro cubico">metro cubico</option>
    </select>
 <br><br>
 <button name= "accion" value="convertir">Convertir</button>
<br><br><br>
 <label >La conversión es: <?php echo $convertir->resultado?></label>

</form>
