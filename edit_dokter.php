<?php
include "koneksi.php";

$kd = $_GET["kd_dokter"];

$data = mysqli_query($conn,"Select * from dokter WHERE kd_dokter='$kd'");
while($row=mysqli_fetch_array($conn,$data)){
	?>
	<form action="proses_edit_dokter.php" method="POST">
	
	<table>
		<tr>
			<td>kd</td><td>:<input type="text" name="kd" value="<?php echo $kd; ?>">
		</tr>
		<tr>
			<td>Nama_dokter</td><td>:<input type="text" name="nama_dokter" value="<?php echo $row["Nama_dokter"]; ?>">
		</tr>
		<tr>
			<td>Alamat</td><td>:<input type="text" name="alamat" value="<?php echo $row["Alamat"]; ?>">
		</tr>
		<tr>
			<td>Spesialis</td><td>:<input type="text" name="Spesialis_dokter" value="<?php echo $row["Spesialis_dokter"]; ?>">
		</tr>
		<tr>
			<td><input type="submit" value"EDIT"></td>
		</tr>
		</form>
	</table>	
	<?php
}
?>