<?php
include "koneksi.php";

$kd_ruang    = $_POST['kd_ruang'];
$Nama_ruang= $_POST['Nama_ruang'];
$nama_gedung = $_POST['nama_gedung'];


$query = mysqli_query($conn,'insert into ruang(kd_ruang,Nama_ruang,nama_gedung) values
 ("'.$kd_ruang.'","'.$Nama_ruang.'","'.$nama_gedung.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='ruang.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='input_ruang.php'</script>\n";
}
?>