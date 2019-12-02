 <html> 
    <head>tugas conditional statment</head>
      <body>
         <h2>NILAI ANDA</h2>
         <form action"" method="post"=>
         <label>
          nilai :
         <input type="number" nama="nilai" value=="<?php echo isset($_POST['nilai'])?$_POST['nilai']:""; ?>" />
         </label>
        <input type="submit" name="submit" value="submit" >
 
    <?php
  
   $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : "" ;
   echo "nilai kamu : " .$nilai;
    ?>
   <br><br> 

   <label>
    nilai :<input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?$_POST['nilai']:""; ?>" />
   </label>

   <input type="submit" name="submit1" value="submit" />

   <?php
    $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : "" ;
    echo "nilai kamu : ".$nilai;
      
   if (isset($_POST['nilai']))
    if ($nilai == 100)
   {
      echo "nilai anda s+ <br>zelamat,senyum dulu dong";
 
   }
   else if($nilai >= 85 and $nilai < 100)
   
   {
      echo "nilai anda s <br>nice";
 
   }
   else if($nilai >= 50 and $nilai < 85)
   {
      echo "nilai anda A <br>selamat";
 
   }
   else if($nilai >= 20 and $nilai < 50)

   {
      echo "nilai anda c <br>selama ini ngapain aja";
   }
   else if($nilai >= 0 and $nilai < 20)
   {
		echo "";

	}
	?>

    <br><br><br><hr><br>
    <h2>form penjumlahan</h2>
    <p>masukkan angka yang ingin di jumlahkan</p>

     <input type="number" nama="angka1" placeholder="angka1" value="<?php echo isset($_POST['angka1'])? $_POST['angka1'] : ""; ?>" /?>  

      +
       <input type="number" nama="angka1" placeholder="angka2" value="<?php echo isset($_POST['angka2'])? $_POST['angka2'] : ""; ?>" /?>
       <button type="submit" name="submitplus" >hitung</button>
       <br><br>
       
       <?php

      if (isset($_POST['angka1']) and   ($_POST['angka2']))
      {
      $angka1 = $_POST["angka1"];
      $angka2 = $_POST["angka2"];
 
   echo "<b>" .   $angka1 . " + " .   $angka2 . " = " . ($angka1+$angka2) . "</b>";
   }
  else 
   { 
   echo "<b>isi kedua input di atas </br>";
	}



 
   ?>

   </form> 
          
  

</body>
</html> 

