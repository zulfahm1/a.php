<html>
  <head>
	   <title>arraymultidemsinal</title>
       
  </head>
    <body>


<?php
 //1 Array multidimensional ini adalah array yang menyimpan array lagai didalamnya dan seterusnya sampai dengan kedalaman tidak terbatas, meskipun tidak terbatas, kebanyakan programer akan sulit untuk mengelola sebuah array dimensional dengan kedalaman lebih dari 3 leve.


       $buah = array
  (
  array("pepaya","langsat","belimbing"),
  array("mangga","semangka","buah naga"),
  array("pisang","durian"),
  array("nangka","salak","rambutan")
  );
    
  echo"saya makan ".$buah[0][0];

	echo "<br>";
       $benda = array
  (
  array("bantal","gitar","meja"),
  array("guling","layar","spidol"),
  array("gelas","baju","hp"),
  array("leptop","tas","speaker")
  );
    
  echo"take me back my ".$benda[0][1];
  
    echo "<br>";
       $warna = array
  (
  array("merah","merah muda","merah tua"),
  array("hijau","hijau muda","hijau tua"),
  array("biru","biru muda","biru tua"),
  );
    
  echo"tas ku berwarna ".$warna[0][0];
      echo"<br>";

     $benda = array(array
  (
  array("bantal","gitar","meja"),
  array("guling","layar","spidol"),
  array("gelas","baju","hp"),
  array("leptop","tas","speaker")
  ));
    
  echo"take me back my ".$benda[0][1][1];
  
    echo "<br>";

           $warna = array(array
  (
  array("merah","merah muda","merah tua"),
  array("hijau","hijau muda","hijau tua"),
  array("biru","biru muda","biru tua"),
  ));
    
  echo"tas ku berwarna ".$warna[0][0][1];
  
     echo "<br>";
    $benda= array("bantal","gitar","piring");
	sort ($benda);

	var_dump($benda);
     
       echo "<br>";
    $buah= array("mangga","avocado","coconut");
	sort ($buah);

	var_dump($buah);

     
      echo "<br>";
    $warna= array("pink","biru","jingga");
	rsort ($warna);

	var_dump($warna);
     
       echo "<br>";
    $bentuk= array("kotak","bulat","gepeng");
	rsort ($bentuk);

	var_dump($bentuk);


       
      echo "<br>";
    $warna= array("hati"=>"pink","langit"=>"biru","pala"=>"jingga");
	rsort ($warna);

	var_dump($warna);
     
       echo "<br>";
    $bentuk= array("sdfg"=>"kotak","sdfg"=>"bulat","sdfg"=>"gepeng");
	rsort ($bentuk);

	var_dump($bentuk);

          
      echo "<br>";
    $warna= array("hati"=>"pink","langit"=>"biru","pala"=>"jingga");
	sort ($warna);

	var_dump($warna);
     
       echo "<br>";
    $bentuk= array("sdfg"=>"kotak","sdfg"=>"bulat","sdfg"=>"gepeng");
	sort ($bentuk);

	var_dump($bentuk);



     echo "<br>";
    $warna = array(0=>4,8=>"6",3=>"jingga");
	rsort ($warna);

	var_dump($warna);
     
      echo "<br>";
    $bentuk= array(8=>"7",6=>"4",3=>"3");
	rsort ($bentuk);

	var_dump($bentuk);

          
    echo "<br>";
    $warna= array(0=>"9",6=>"2",8=>"jingga");
	sort ($warna);

	var_dump($warna);
     
       echo "<br>";
    $bentuk= array(4=>"7","3"=>"1","5"=>"2");
	sort ($bentuk);

	var_dump($bentuk);
      
?>
    </body>
</html>
