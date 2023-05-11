<?php 
include 'koneksi.php';
 
$nis = $_GET['nis'];
 
 
mysqli_query($db_link,"DELETE FROM data_siswa WHERE nis='$nis'");
 
header("location:index.php?pesan=hapus");
 
?>