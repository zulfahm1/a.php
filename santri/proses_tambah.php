<?php

include 'koneksi.php';

$a = $_POST['orang'];
$b = $_POST['jkl'];
$c = $_POST['alamat'];

$sql = "INSERT INTO santriii(name, gender, addres) VALUES ('$a', '$b', '$c')";	

mysqli_query($serah, $sql);
header('location: index.php');