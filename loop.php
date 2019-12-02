<!DOCTYPE html>
<html>
   <body>
   
       <?php
       
      //bintang increase
      for ($a1 = 0 ; $a1<6;$a1++)
      { for ($a2 =0 ; $a2 < $a1 ; $a2++)
      {echo "*" ; } echo "<br>";}
       echo "<br>" ;
 	
       //bintang decrease 
         for ($b1 = 5 ; $b1>0;$b1--)
      { for ($b2 = $b1 ; $b2 >= 1 ; $b2--)
      {echo "*" ; } echo "<br>";}
       echo "<br>" ;
       
        //angka increase
        for ($c1 = 1 ; $c1<=5;$c1++)
      { for ($c2 =1 ; $c2 <= $c1 ; $c2++)
      {echo $c2 ; }  echo "<br>";}
       echo "<br>" ;
  
        //angka decrease
         for ($d1 = 5 ; $d1>= 1 ;$d1--)
      { for ($d2 =1 ; $d2 <= $d1 ; $d2++)
      {echo $d2 ; } echo "<br>";}
       echo "<br>" ;


        $alfa = array("A","B","C","D","E","F","G");
         $forl = 0 ;
         for ($x = 6; $x >=0; $x --) {
           for ($a = 0; $a <= $x; $a++) {
            echo $alfa[$a];
          }
    
        for ($c = 6-$x; $c>0; $c --) {
          echo ".....";
         }
 
       for ($b = $x; $b >= 0; $b--) {
           echo $alfa[$b];
 }
         echo "<br>";
       
  }    
       $beta = "ABCDEFGFEDCBA";
       $theta = array("A","B","C","D","E","F","G");

       for ($y = 7; $y >= 0; $y--) {
        echo str_replace($theta[$y],"..",$beta,$i);
        echo "<br>";
     }  
       ?>
   </body>
</html>
