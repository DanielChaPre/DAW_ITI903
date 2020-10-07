<a href="index.php">Inicio </a> <br><br>

<?php

$h = "0";
$m = "0";
$s = "0";

for($i = 0; $i<60; $i++){
    for($j = 0; $j<60; $j++){
        for($t = 0; $t<60; $t++){
            if($i > 9){
                if($j > 9){
                    if($t > 9){
                        echo $i.":".$j.":".$t;
                        echo "<br>";
                    }else{
                        echo $i.":".$j.":0".$t;
                        echo "<br>";
                    }
                }else{
                    if($t > 9){
                        echo $i.":0".$j.":".$t;
                        echo "<br>";
                    }else{
                        echo $i.":0".$j.":0".$t;
                        echo "<br>";
                    }
                }
            }else{
                if($j > 9){
                    if($t > 9){
                        echo "0".$i.":".$j.":".$t;
                        echo "<br>";
                    }else{
                        echo "0".$i.":".$j.":0".$t;
                        echo "<br>";
                    }
                }else{
                    if($t > 9){
                        echo "0".$i.":0".$j.":".$t;
                        echo "<br>";
                    }else{
                        echo "0".$i.":0".$j.":0".$t;
                        echo "<br>";
                    }
                }
            }
        }
    }
}


/*for($i = 0; $i<=59; $i++){
        $h = ($h+$i);
    for($j = 0; $j<=59; $j++){
        $m = ($m+$j);
        for($t = 0; $t<=59; $t++){
            echo $h.":".$m.":".($m + $t);
            echo "<br>";
        }
    }
}*/