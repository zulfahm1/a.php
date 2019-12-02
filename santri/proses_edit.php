<?php

include 'koneksi.php';

 $id =%_POST['id'];
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $address = $_POST['address'];

 sql ="UPDATE santri SET name ='$name,gender= '$gender',address='$adrs'  WHERE id ='$'id'";
 mysqli_query($konek,$sql);
 header(''location : index.php);
 