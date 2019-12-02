<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from santri where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			
			nomor : <br>
			<input type="text" name="nim" value="<?php echo $row['nomor']; ?>"><br>
			Nama : <br>
			<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
			jenis kelamin : <br>
			<input type="radio" name="jenis kelamin" value="<?php echo $row['jenis kelamin']; ?>"><br>
			Alamat : <br>
			<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>