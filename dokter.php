<html>
<head>
<title>Rumah Sakit</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<table width="100" border="1">
			<tr>
				<td colspan="2" align="center"><h2>Sistem informasi rumah sakit</h2></td>
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
							<a href="input_dokter.php">input dokter</a>
							<table border="1">
								
									<tr>
										<th>No</th>
										<th>kd_dokter</th>
										<th>Nama_dokter</th>
										<th>Alamat</th>
										<th>Spesialis_dokter</th>
										<th>Aksi</th>
									</tr>
									
							</body>
<?php
include "koneksi.php";
$query ="SELECT * FROM dokter ORDER BY kd_dokter";
$sql = mysqli_query($conn,$query);
$no=1;
while($data=mysqli_fetch_array($sql)){
	?>
	<tr class="odd gradeX">
		<td><?php echo $no?></td>
		<td><?php echo 
		$data['kd_dokter'];?></td>
		<td><?php echo 
		$data['Nama_dokter'];?></td>
		<td><?php echo
		$data['Alamat'];?></td>
		<td><?php echo
		$data['Spesialis_dokter'];?></td>
		<td class ="center"><a href ="edit_dokter.php?kd_dokter=<?php echo
		 $data['kd_dokter'];?>">Edit</a>|<a href="hapus_dokter.php?kd_dokter=<?php echo $data['kd_dokter']?>"
		 onClick ="return confirm(Apakah anda ingin menghapus <?php echo $data['Nama_dokter'];?>?')">hapus</a></td>
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
<button type="button" class="btn btn-primary">Primary</button>
</body>
</html>


