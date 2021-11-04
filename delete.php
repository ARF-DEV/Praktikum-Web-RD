<?php
include "koneksi.php";

$nim = $_POST["nim"];
$sql = "DELETE FROM `mahasiswa` WHERE nim = '$nim'";
$hasil = mysqli_query($kon,$sql);

?>