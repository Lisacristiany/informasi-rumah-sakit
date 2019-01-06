<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<table width="700" border="1">
			<tr>
				<td colspan="2" align="center"><h2>Selamat Datang Di Sistem Informasi Rumah Sakit</h2></td>
			</tr>
			<tr>
				<td width ="200">
	<ul>
	<li><a href="login.php">login</a></li>
	<li><a href="dokter.php">dokter</a></li>
	<li><a href="pasien.php">pasien</a></li>
	<li><a href="pembayaran.php">pembayaran</a></li>
	<li><a href="petugas.php">petugas</a></li>
	<li><a href="rawat_inap.php">rawat_inap</a></li>
	<li><a href="ruang.php">ruang</a></li></td>
	<ul>

	</td>
	<td width="500">
		<form method="post" action="proses_rawat_inap.php">
			<table border="0">
			<tr>
			<td>kd_rawat_inap</td>
			<td>:</td>
			<td><div class="input-group mb-3">
  <div class="input-group-prepend">
   
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div></td>
	</tr>
	<tr>
		<td>Nama_pasien</td>
			<td>:</td>
				<td><textarea name="Nama_pasien" placeholder="Nama_pasien"></textarea></td>
    </tr>
	<tr>
			<td>kd_ruangan</td>
			<td>:</td>
				<td><textarea name="kd_ruangan" placeholder="kd_ruangan"></textarea></td>
	</tr>
	<tr>
			<td></td>
			<td></td>
			<td><input type="submit"name="simpan" value="simpan"></td>
	</tr>
</table>
</form>
</td>
</tr>
<tr>
	<td colspan ="2"align="center"><br></script></td>
</tr>
</table>
</body>
</html>


