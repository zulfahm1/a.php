<!DOCTYPE html>
<html>
<head>
	<title>data santri</title>
</head>
<body>
  <a href="tambah.php">tambah data</a>
    <table>
    	<tr>
    		<th>nomor</th>
    		<th>nama</th>
    		<th>Jenis kelamin</th>

    		<th>Alamat</th>
    		<th>tindakan</th>
    	</tr>
        <?php 
           include 'koneksi.php';
           $nomor = 1;
           $sql   ="SELECT * FROM santriii";
           $result= mysqli_query($serah, $sql);

           function jkl($x){
           	$j =$x;
           	if ($j==1){
           		return "laki-laki";
           	}else {
           		return "perempuan";
           	}
           }


           if (mysqli_num_rows($result)>0){
           	while ($row = mysqli_fetch_assoc($result)) {
           		echo "
                  <tr>
                    <td>".$nomor++."</td>
                    <td>".$row['name']."</td>
                    <td>".jkl ($row['gender'])."</td>
                    <td>".$row['addres']."</td>
                    <td>
                        <a href='edit.php?id=".$row['id'] ."'>Edit</a>
                        <a href='delete.php?id=".$row['id']." 'onclick='javascript:return confirm(\"apakah anda ingin menghapus data ini?\")'>hapus</a>
                    </td>
                  </tr>   
           		";
           	}
           }
         ?>
    </table>
</body>
</html>