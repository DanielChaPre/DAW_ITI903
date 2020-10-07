<a href="../index.php">Regresar al inicio</a> 
<a href="../Conversion.php">Conversión</a> 
<br><br>
<?php 


// entrada
//detectar operaciones
// Ejecutar operacion y resultado
// impresión

include_once("Controllers/CalculadoraController.php");
$calculadora = new CalculadoraController();
$calculadora->cacharParametros();
$calculadora->ejecutarOperacion();

?> <br> <br>

<form action="">
    <label><?php echo $calculadora->pantalla?></label>
 <input type="hidden" name ="pantalla" value="<?php echo $calculadora->pantalla?>"> =
 <label><?php echo $calculadora->resultado?></label>
 <input type="hidden" name = "resultado" value="<?php echo $calculadora->resultado?>">
 <br><br>
<input type="number" name="entrada" required>
 <button name= "accion" value="sumar">+</button>
 <button name= "accion" value="resta">-</button>
 <button name= "accion" value="multi">*</button>
 <button name= "accion" value="divid">/</button>

</form>
<form action="">
    <button name="accion" value="reset">C</button>
</form>
















