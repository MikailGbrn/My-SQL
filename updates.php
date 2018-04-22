<?php 

include "connect.php";

$id = $_GET['id'];

$nama = $_REQUEST['namabaru'];
$email = $_REQUEST['emailbaru'];
$tel = $_REQUEST['phonebaru'];
$alamat = $_REQUEST['alamatbaru'];

$sql = "UPDATE buku SET Nama = '$nama' , Email = '$email' , Tel = '$tel' , Alamat = '$alamat' WHERE ID='$id'";

		

$res = mysqli_query($link, $sql);
/*if($res) {
	echo "Data Sudah Diupdate"; header("refresh:1; url= List.php");
}
else { 
	echo mysqli_error($link);
}*/
header("refresh:1; url= List.php");
mysqli_close($link);

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #4b5c77">
<p style="margin-left: 550px; margin-top: 250px; font-size: 50px; color: white; font-family: arial;">Data Telah Di Update!</p>
</body>
</html>