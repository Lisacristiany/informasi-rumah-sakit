<?php
include "koneksi.php";

$kd_rawat_inap    = $_POST['kd_rawat_inap'];
$Nama_pasien= $_POST['Nama_pasien'];
$kd_ruangan = $_POST['kd_ruangan'];


$query = mysqli_query($conn,'insert into rawat_inap(kd_rawat_inap,Nama_pasien,kd_ruangan) values
 ("'.$kd_rawat_inap.'","'.$Nama_pasien.'","'.$kd_ruangan.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='rawat_inap.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='input_rawat_inap.php'</script>\n";
}
?>