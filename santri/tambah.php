<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>tambah santri</title>
</head>
<body>
     <form action="proses_tambah.php"
     method="post">
      <label for="namaInput">Nama:</label>
      <input id="namaInput" type="text"
      	name="orang">
<br>
      <label>jenis kelamin: </label>
      <input id="laki" type="radio" name="jkl" value="1">
      <label for="laki">laki-laki</label>
        
     
     <input id="pr" type="radio" name="jkl" value="0">
      <label for="pr">perempuan</label>
      <br>
      <label for="addresInput">alamat </label>
      <textarea name="alamat"
      	id="addresInput" id="addressInput"></textarea> 

      	<button type="submit">kirim</button>
     	
     </form>
</body>
</html>