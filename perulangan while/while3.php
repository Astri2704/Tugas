<?php
 echo "<h2>Perulangan While Ke-3</h2>";

 $j =1;
 while($j <= 10){
     echo "<br>";
     $k = $j;
     while($k <= 10){
         echo "$k";
         $k++;
     }
     $j++;
 }
?>