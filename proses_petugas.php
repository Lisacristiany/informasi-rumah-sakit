<?php
include "koneksi.php";

$kd_petugas    = $_POST['kd_petugas'];
$Nama_petugas   = $_POST['Nama_petugas'];
$Alamat   = $_POST['Alamat'];
$Jam_jaga   = $_POST['Jam_jaga'];


$query = mysqli_query($conn,'insert into petugas(kd_petugas,Nama_petugas,Alamat,Jam_jaga) values
 ("'.$kd_petugas.'","'.$Nama_petugas.'","'.$Alamat.'","'.$Jam_jaga.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='petugas.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='input_petugas.php'</script>\n";
}
?>