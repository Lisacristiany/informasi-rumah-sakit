<html>
<head>
</head>
<body>
	<table width ="1000" border="1">
		<tr>
			<td colspan ="2" align="center"><h2>Sistem informasi Rumah Sakit</h2></td>
		</tr>
		<tr>
			<td width -"200">
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
	<td width ="500">
	<a href ="input_pasien.php">input pasien</a>
	<table border ="1">
<head>
	<tr>
			<th>No</th>
			<th>Kd pasien</th>
			<th>kd dokter</th>
			<th>Nama pasien</th>
			<th>Alamat</th>
			<th>Tanggal berkunjung</th>
			<th>keluhan</th>
			<th>Aksi</th>
		</tr>
	</head>
	<body>
<?php
include "koneksi.php";
$query ="SELECT * FROM pasien ORDER BY kd_pasien";
$sql = mysqli_query($conn,$query);
$no=1;
while($data=mysqli_fetch_array($sql)){
	?>
	<tr class="odd gradeX">
		<td><?php echo $no?></td>
		<td><?php echo 
		$data['kd_pasien'];?></td>
		<td><?php echo 
		$data['kd_dokter'];?></td>
		<td><?php echo
		$data['Nama_pasien'];?></td>
		<td><?php echo
		$data['Alamat'];?></td>
		<td><?php echo
		$data['Tanggal_berkunjung'];?></td>
		<td class="center"><?php echo
		$data['keluhan'];?></td>
		<td class ="center"><a href ="edit_pasien.php?kd=<?php echo
		 $data['kd_pasien'];?>">Edit</a>|<a href="hapus_pasien.php?kd=<?php echo $data['kd_pasien'];?>"
		 onClick ="return confirm('Apakah anda ingin menghapus <?php echo $data['Nama_pasien'];?>?')">hapus</a></td>
		</tr>

<?php $no++;}?>
</body>
</table>
</td>
</tr>
<tr>
	<td colspan ="2" align="center"><br>
	</td>
</tr>
</table>
</body>
</html>
