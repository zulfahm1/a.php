<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>tambah santri</title>
</head>
<body>

<?php

include 'koneksi.php';
$id =$_GET['id'];
$sql ="SELECT * FROM santri WHERE id=$id";
$result =mysqli _query($konek,$sql);
$row= mysql_fetch_assoc($serah);


?>



     <form action="proses_tambah.php"
     method="post">

      <label for="namaInput">Nama:</label>
      <input id="namaInput" type="text" name="name" value="<?echo $row['name']"?>">" 
      	
<br>
      <label>jenis kelamin: </label>
      <input id="laki" type="radio" name="jkl" value="1"<?php echo ($row['gender'])?'checked':''?>>
      <label for="laki">laki-laki</label>
        
     
     <input id="pr" type="radio" name="jkl" value="0"<?php echo ($row['gender'])?'':'checked'?>>
      <label for="pr">perempuan</label>
      <br>
      <label for="addresInput">alamat </label>
      <textarea name="alamat"
      	id="addresInput" id="addressInput"></textarea> 

      	<button type="submit">kirim</button>
     	
     </form>
</body>
</html>