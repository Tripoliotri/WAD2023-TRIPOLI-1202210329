<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$servername = "localhost";
$database = "jurnal3wad";
$username = "root";
$password = "";
 
$connect = mysqli_connect($servername, $username, $password, $database);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$connect) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}

echo "Connected successfully";
mysqli_close($connect);
// 
?>