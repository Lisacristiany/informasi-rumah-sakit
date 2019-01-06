<?php
include "koneksi.php";

$kd_pembayaran    = $_POST['kd_pembayaran'];
$kd_pasien   = $_POST['kd_pasien'];
$kd_petugas   = $_POST['kd_petugas'];
$jumlah_bayar   = $_POST['jumlah_bayar'];


$query = mysqli_query($conn,'insert into pembayaran(kd_pembayaran,kd_pasien,kd_petugas,jumlah_bayar) values
 ("'.$kd_pembayaran.'","'.$kd_pasien.'","'.$kd_petugas.'","'.$jumlah_bayar.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='pembayaran.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='input_pembayaran.php'</script>\n";
}
?>