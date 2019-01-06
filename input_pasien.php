<html>
<head>
	</head>
	<body>
<table width ="700" border ="1">
	<tr>
		<td colspan ="2" align ="center"><h2>Selamat Datang Di Sistem Informasi Rumah Sakit</h2></td>
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
		<form method="post" action="proses_pasien.php">
			<table border="0">
	<tr>
		<td>kd_pasien</td>
			  <td>:</td>
			      <td><input type="text" name="kd_pasien" placeholder="kd_pasien"></td>
	</tr>
	<tr>
		<td>kd_dokter</td>
			<td>:</td>
				<td><textarea name="kd_dokter" placeholder="kd_dokter"></textarea></td>
    </tr>
	<tr>
			<td>Nama_pasien</td>
			<td>:</td>
				<td><textarea name="Nama_pasien" placeholder="Nama_pasien "></textarea></td>
	</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
				<td><textarea name="Alamat" placeholder="Alamat"></textarea></td>
	</tr>
		<tr>
			<td>Tanggal_berkunjung </td>
			<td>:</td>
				<td><textarea name="Tanggal_berkunjung" placeholder="Tanggal_berkunjung "></textarea></td>
	</tr>
		<tr>
			<td>keluhan </td>
			<td>:</td>
				<td><textarea name="keluhan" placeholder="keluhan "></textarea></td>
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
