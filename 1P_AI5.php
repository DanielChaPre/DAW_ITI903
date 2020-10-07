<a href="index.php">Inicio </a> <br><br>

<?php
//------------------
//------------------
echo "<br><strong>1</strong><br>";
echo "<br>";
$array = [1,2,3,4,5];
$arrayN = [];
$val = "";
$val2 = "";

for($i = 0; $i < count($array); $i++){
   // array_unshift($arrayN, $array[$i]);
    $val = $val . $array[$i];
    $val = $val . ","; 
    echo "$val". "<br>";
}

//------------------
echo "<br><strong>2</strong><br>";
echo "<br>"; 
$val2 = $val;
$ext = 10;
echo "$val2". "<br>";

for($i = 5; $i > 0; $i--){
    $val2 = substr($val2,0,$ext);
    echo $val2. "<br>";
    $ext = $ext -2;
}

//------------------
echo "<br><strong>3</strong><br>";
echo "<br>"; 
$valMes1 = "Enero:";

for($i = 1; $i <= 31; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Febrero:";

for($i = 1; $i <= 28; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Marzo:";

for($i = 1; $i <= 31; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Abril:";

for($i = 1; $i <= 30; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Mayo:";

for($i = 1; $i <= 31; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Junio:";

for($i = 1; $i <= 30; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Julio:";

for($i = 1; $i <= 31; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Agosto:";

for($i = 1; $i <= 31; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Septiembre:";

for($i = 1; $i <= 30; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Octubre:";

for($i = 1; $i <= 31; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Noviembre:";

for($i = 1; $i <= 30; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

$valMes1 = "Diciembre:";

for($i = 1; $i <= 31; $i){
    //echo ++$i." <br>";
    $valMes1 = $valMes1 . $i++ . ","; 
}

echo $valMes1 . "<br>";

//------------------
echo "<br><strong>4</strong><br>";
echo "<br>";
$rayas = "=========="; 
$x = "1";
$ext = 10;
echo "=".$rayas . $x . $rayas."=="."<br>";
for($i = 2; $i <= 9; $i++){
    $rayas = substr($rayas,0, $ext);
    $ext = $ext - 1;
    $x = $i.$x.$i;
    echo $rayas.$x.$rayas."<br>";
}

//------------------
echo "<br><strong>5</strong><br>";
echo "<br>";
$rayas = "=========="; 
$x = "1";
$ext = 10;
echo "=".$rayas . $x . $rayas."=="."<br>";
for($i = 2; $i <= 9; $i++){
    $rayas = substr($rayas,0, $ext);
    $ext = $ext - 1;
    $x = $i.$x.$i;
    echo $rayas.$x.$rayas."<br>";
}

echo $rayas.$x.$rayas."<br>";
$ext1 = 16;
for($i = 9; $i >= 2; $i--){
    $rayas = $rayas."=";

    $x = substr($x, 0, $ext1);
    $ext1 = $ext1 -2;
    $x = substr($x,1);
    echo $rayas.$x.$rayas."<br>";
}