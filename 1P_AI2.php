

<?php


///1 o > 0, true o string no vacio lo marca como verdadero pero en caso contrario los marca como falso


if(true){
    echo "verdadero";
}else{
    echo "Falso";
}
 echo "<br>";
 echo "<br>";
if(1 == 1){
    echo "verdadero";
}else{
    echo "Falso";
}
echo "<br>";
echo "<br>";
if(1 == 1 && 1 == 2){
    echo "verdadero";
}else{
    echo "Falso";
}
echo "<br>";
echo "<br>";
if(1 == 1 || 1 == 2){
    echo "verdadero";
}else{
    echo "Falso";
}
echo "<br>";
echo "<br>";
$variable = "1";

switch($variable){
    case "1":
        echo "verdadero";
    break;
    case 1:
        echo "verdadero";
    break;
    case true:
        echo "verdadero";
    break;
    default:
        echo "falso";
    break;
}