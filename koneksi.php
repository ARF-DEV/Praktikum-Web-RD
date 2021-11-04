<?php
$host="localhost";
$user="root";
$password="";
$database="test";

$kon = mysqli_connect($host, $user, $password, $database);
if (!$kon){
    die("Koneksi gagal : ".mysqli_connect_error());
}
?>