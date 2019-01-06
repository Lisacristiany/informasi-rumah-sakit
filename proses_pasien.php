<?php
include "koneksi.php";

$kd_pasien    = $_POST['kd_pasien'];
$kd_dokter    = $_POST['kd_dokter'];
$Nama_pasien   = $_POST['Nama_pasien'];
$Alamat    = $_POST['Alamat'];
$Tanggal_berkunjung = $_POST['Tanggal_berkunjung'];
$keluhan = $_POST['keluhan'];

$query = mysqli_query($conn,'insert into pasien(kd_pasien,kd_dokter,Nama_pasien,Alamat,Tanggal_berkunjung,keluhan) values
 ("'.$kd_pasien.'","'.$kd_dokter.'","'.$Nama_pasien.'","'.$Alamat.'","'.$Tanggal_berkunjung.'","'.$keluhan.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='pasien.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='input_pasien.php'</script>\n";
}
?>