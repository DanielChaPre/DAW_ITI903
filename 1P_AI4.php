<a href="index.php">Inicio </a> <br><br>

<?php
//------------------
echo "<br><strong>Ciclo For</strong><br>";
echo "<br>";

$condicion = 5;

for($i = 0; $i < $condicion; $i){
    echo ++$i." <br>";
}

//------------------
echo "<br><strong>Ciclo While</strong><br>";
echo "<br>";
$condicion2 = 5;
while($condicion2 > 0){
    $condicion2--;
    echo "$condicion2 <br>";
}

//------------------
echo "<br><strong>Ciclo do-While</strong><br>";
echo "<br>";
$condicion3 = 5;
do{
    $condicion3--;
    echo "$condicion3 <br>";
}while($condicion3 > 0);

//------------------
echo "<br><strong>Ciclo foreach</strong><br>";
echo "<br>";

$arrayN = [1,2,3,4,"5", 6];
$arrayN = array(1,false,3.12331,"asdas",5, "asdas");
echo var_dump($arrayN);

//------------------
echo "<br><strong>Funciones del arreglo</strong><br>";
echo "<br>";

$arrNuevo = [];
array_push($arrNuevo, 3);
echo var_dump($arrNuevo) . "<br>";


//------------------
echo "<br><strong>Funciones del arreglo(agregar al final)</strong><br>";
echo "<br>";
array_unshift($arrNuevo, 3);
echo var_dump($arrNuevo) . "<br>";

//------------------
echo "<br><strong>Eliminar un elemento</strong><br>";
echo "<br>";
unset($arrNuevo[1]);
echo var_dump($arrNuevo) . "<br>";

//------------------
echo "<br><strong>Conteo de elementos</strong><br>";
echo "<br>";

echo count($arrNuevo) . "<br>";

//------------------
echo "<br><strong>Merge de arrays</strong><br>";
echo "<br>";

$arr = [1,2,3,4];
$arr2 = [1,2,3,4];

$arrMerge = array_merge($arr, $arr2);

echo var_dump($arrMerge) . "<br>";

//------------------
echo "<br><strong>Voltear arreglo</strong><br>";
echo "<br>";
$arrMerge = array_reverse($arr, $arr2);

echo var_dump($arrMerge) . "<br>";

//------------------
echo "<br><strong>Merge sin repetidos</strong><br>";
echo "<br>";
$arrMerge = array_replace($arr, $arr2);

echo var_dump($arrMerge) . "<br>";

//------------------
echo "<br><strong>Ordenar de manera ascendentes</strong><br>";
echo "<br>";
sort($arrMerge);

echo var_dump($arrMerge) . "<br>";

//------------------
echo "<br><strong>Ordenar de manera descendente</strong><br>";
echo "<br>";
rsort($arrMerge);

echo var_dump($arrMerge) . "<br>";

//------------------
echo "<br><strong>foreach</strong><br>";
echo "<br>";
$numeros = [1,2,3,4];
foreach($numeros as $item){

    if(is_array($item)){
        foreach($item as $subitem){
            echo "$subitem <br>";
        }
    }else{
        echo "$item <br>";
    }
   
}


//------------------
echo "<br><strong>foreach 2</strong><br>";
echo "<br>";
$numeros = [1,2,"a", ["a","b","c","d"]];
foreach($numeros as $item){

    if(is_array($item)){
        foreach($item as $subitem){
            echo "---$subitem <br>";
        }
    }else{
        echo "$item <br>";
    }
   
}

//------------------
echo "<br><strong>Arreglo simple</strong><br>";
echo "<br>";
echo "$numeros[2] <br>";

//------------------
echo "<br><strong>Arreglo asociativos</strong><br>";
echo "<br>";
$asociativos = ["primero" => "1°", "segundo" => "2°"];
echo $asociativos["primero"]. "<br>";


//------------------
echo "<br><strong>Arreglo asociativos con foreach</strong><br>";
echo "<br>";

foreach($asociativos as $itemmm){
    echo "$itemmm <br>";
}



//------------------
echo "<br><strong>Arreglo asociativos con foreach 2</strong><br>";
echo "<br>";

foreach($asociativos as $Key => $valor){
    echo "$Key - $valor <br>";
}

/*$menu = [
 "id" => "file",
 "value" => "File",
 "popup" => [
    "menuitem" =[
        
    ]
 ]

 ];*/






