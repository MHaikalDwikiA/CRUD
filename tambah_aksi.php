<?php 
include 'koneksi.php';
 
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
 
$cek = mysqli_num_rows(mysqli_query($db_link , "SELECT * FROM data_siswa where nis='$nis' or email='$email'"));
    if ($cek > 0){
        header("location:tambah.php?pesan=duplikat");
    }
elseif (empty($nis && $nama && $tanggal && $kelamin && $alamat && $email && $no_hp)) {
    header("location:tambah.php?pesan=gagal");
}else{
    mysqli_query($db_link,"INSERT INTO data_siswa VALUES('$nis', '$nama', '$tanggal', '$kelamin', '$alamat', '$email' , '$no_hp')");
    header("location:index.php?pesan=input");
}
 
 
?>