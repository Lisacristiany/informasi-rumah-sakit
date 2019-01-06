<?php
include "koneksi.php";

$Nama    = $_POST['kd_dokter'];
$Alamat    = $_POST['Nama_dokter'];
$Ttl    = $_POST['Alamat'];
$Status    = $_POST['Spesialis_dokter'];

$query = mysqli_query($conn,'insert into dokter(Nama_dokter,Alamat,Spesialis_dokter) values
 ("'.$Nama.'","'.$Alamat.'","'.$Spesialis_dokter.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='dokter.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='input_dokter.php'</script>\n";
}
?>