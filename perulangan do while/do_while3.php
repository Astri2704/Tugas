<?php

echo "<h2>Perulangan Do While Ke-</h2>";

$r=0;
do{
    $k=$r;
    do{
        echo "*";
        $k++;
    }while($k <= 10);
    echo "<br>";
    $r++;
}while ($r <= 10);
?>