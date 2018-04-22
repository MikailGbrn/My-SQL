<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background-color: #4b5c77">
        <p style="font-size: 25px; color: white; margin-top: 50px; font-family: arial; text-align: center;">Form Pendataan Brawijaya International <br> Trend Center</p>

 <?php 

include "connect.php";

$idedit = $_GET['id'];

$sql = "SELECT ID, Nama, Email, Tel, Alamat FROM buku";
$result = mysqli_query($link, $sql);

$baris = (mysqli_fetch_array($result));
$id = $baris[0];
    if($id == $idedit){
    echo "<div style='color: white; margin-left: 650px; margin-top: 50px;'>";
        echo '<form action="updates.php?id='.$id.'" method="POST">

            Nama: <br><input type="text" 
                    name="namabaru" value="'.$baris[1].'"><br><br>
            Email: <br><input type="email" 
                    name="emailbaru" value="'.$baris[2].'"><br><br>
            Phone: <br><input type="tel" 
                    name="phonebaru" value="'.$baris[3].'"><br><br>
            Alamat:<br><input type="text" 
                    name="alamatbaru" value="'.$baris[4].'"><br><br>
            <input type="submit" value="Update!" onclick="msg()">
        </form>';
        echo "</div>";
}
 ?>

</body>
</html>