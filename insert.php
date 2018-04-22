<?php

include "connect.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$tel   = $_POST['phone'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO buku (nama, email, tel, alamat) "
     . "VALUES ('$nama','$email','$tel','$alamat')";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
/*if($res) echo "Data berhasil disimpan.";
else echo mysqli_error($link);*/

/* tutup koneksi MySQL */
mysqli_close($link);
header("refresh:3; url= new.html");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #4b5c77">
<p style="margin-left: 550px; margin-top: 250px; font-size: 50px; color: white; font-family: arial;">Data Sudah Disimpan!</p>
</body>
</html>