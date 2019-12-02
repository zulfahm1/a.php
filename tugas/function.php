<?php
 function beta1 ($nilai,$baris) {
 for ($i=0; $i <$baris ;$i++){
  for ($j=0; $j<=$i; $j ++) {
   $k = $nilai +$j;   
   if ($k >=50 and $k<80){ 
  $wow = "C";
  }
  elseif ($k >= 0 and $k <50) {
  $wow= "D";
  }
  elseif ($k >= 90 and $k <=100) {
  $wow= "A";
  }
  elseif ($k >= 80 and $k <90) {
  $wow= "B";
  }
  echo "$k($wow)";
 }
 echo "<br>";
 }
 }
 beta1 (50,3);echo "<br>";
 beta1 (60,5);echo "<br>";
 beta1 (80,3);echo "<br>";

?>
