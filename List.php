

 <!DOCTYPE html>
 <html>
 <head>
    <style>
        table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}

    </style>
 	<title></title>
 </head>
<body style="background-color: #4b5c77">
    <p style="font-size: 25px; color: white; margin-top: 50px; font-family: arial; text-align: center;">List Data Brawijaya International <br> Trend Center</p>
    <?php 

include "connect.php";

$sql = "SELECT ID, Nama, Email, Tel, Alamat FROM buku";
$result = mysqli_query($link, $sql);
if ($result == null) {
    echo "Belum ada data";
}
else {
    echo "<div style='color: white
    ; margin-top: 50px;'>";
echo "<table border=2 background-color = #d2d7dd>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Nama</td>";
echo "<td>Email</td>";
echo "<td>Tel</td>";
echo "<td>Alamat</td>";
echo "<td>Action</td>";
echo "<td>Action</td>";
echo "</tr>";
    while($baris = mysqli_fetch_array($result)) {
     $id = $baris['ID'];
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $baris['Nama'] . "</td>";
        echo "<td>" . $baris['Email'] . "</td>";
        echo "<td>" . $baris['Tel'] . "</td>";
        echo "<td>" . $baris['Alamat'] . "</td>";
        echo '<td><a href="Edit.php?id='.$id.'">Update</a></td>'; 
        echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>'; 
        echo "</tr>";
    }
        echo "</table>";
}

        mysqli_close($link);
 ?>
 <br> <br>
 <div style="margin-left: 500px;"><input type="button" onclick="location.href='new.html'" value="Tambah Data"></div>
 </body>
 </html>
