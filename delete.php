<?php

include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM buku WHERE ID = '$id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: List.php');
exit;