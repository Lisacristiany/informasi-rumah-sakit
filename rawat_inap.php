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
							<a href="input_rawat_inap.php">input rawat inap</a>
							<table border="1">
								
									<tr>
										<th>No</th>
										<th>kd_rawat_inap</th>
										<th>Nama_pasien</th>
										<th>kd_ruangan</th>
										<th>Aksi</th>
									</tr>
									
							</body>
<?php
include "koneksi.php";
$query ="SELECT * FROM rawat_inap ORDER BY kd_rawat_inap";
$sql = mysqli_query($conn,$query);
$no=1;
while($data=mysqli_fetch_array($sql)){
	?>
	<tr class="odd gradeX">
		<td><?php echo $no?></td>
		<td><?php echo 
		$data['kd_rawat_inap'];?></td>
		<td><?php echo 
		$data['Nama_pasien'];?></td>
		<td><?php echo
		$data['kd_ruangan'];?></td>
		<td class ="center"><a href ="edit_rawat_inap.php?kd_rawat_inap=<?php echo
		 $data['kd_rawat_inap'];?>">Edit</a>|<a href="hapus_rawat_inap.php?kd_rawat_inap=<?php echo $data['kd_rawat_inap']?>"
		 onClick ="return confirm(Apakah anda ingin menghapus <?php echo $data['Nama_pasien'];?>?')">hapus</a></td>
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


