<html>


   <head>
      <title>zulfas market </title>
   </head>
       <body style="background-color:733b9c;"> 
             
      <h1 style="text-align:center;">zulfas makret</h1>
       

    <form method="POST">
	   <label>
    harga :<input type="number" name="harga" value="<?php echo isset($_POST['harga'])?$_POST['harga']:""; ?>" />
      </label>
           <input type="submit"  value="check"> 
    
      
      <?php
       if (isset($_POST['harga'])?$_POST['harga']:""){
       $harga=$_POST['harga'];
       $sisa=40000-$harga;
       if ($harga==40000){echo"makasih telah berbelanja" ;}
        else if ($harga>40000){echo "kurangi belanjamu".$sisa;}
       else if ($harga<40000){echo "tambah belanjaan anda sebesar ".$sisa;}
         } 

	  
       ?><br>
      <label>
         diskon :<input type="number" name="diskon" value="<?php echo isset($_POST['diskon'])?$_POST['diskon']:"";?>"/>
      </label>
                <input type="submit" value="check">
        <?php
        if (isset($_POST['diskon'])?$_POST['diskon']:""){
         $diskon=$_POST['diskon'];
         $diskon1=$diskon*7/40;
         $diskon2=$diskon-$diskon1;
        if ($diskon>0){echo "total belanja anda setelah mendapatkan diskon sebesar".$diskon2;}
        elseif ($diskon==0) {echo "input above";}
     }
       
        
?>

     </form> 
 </body>   
</html>
