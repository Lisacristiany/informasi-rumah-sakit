<?php
include "koneksi.php";

$kd = $_GET['kd_dokter'];

mysqli_query($conn,"DELETE FROM dokter WHERE kd_dokter = '$kd'");
header('location:dokter.php');
?>