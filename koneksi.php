<?php
$host='localhost';
$user='root';
$pass="";
$database='school';
$db_link = mysqli_connect($host,$user,$pass,$database);
if(!$db_link){
    echo "Tidak Terhubung";
}
?>