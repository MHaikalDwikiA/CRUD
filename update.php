<?php 
include 'koneksi.php';
 
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
 
mysqli_query($db_link, "UPDATE data_siswa SET nis='$nis', nama='$nama', tanggal='$tanggal', kelamin='$kelamin', alamat='$alamat', email='$email' , no_hp='$no_hp' WHERE nis='$nis'");
 
header("location:index.php?pesan=update");
 
?>