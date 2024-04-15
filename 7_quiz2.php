<html>
<head>
	<title>Form Input Data Pegawai</title>
</head>
<body bgcol>
<form method="post"action="">
	<table width="500"bordercolor="white"bgcolor="white">
		<tr>
			<td colspam="3"align="center"bgcolor="white">
			FORM INPUT DATA PEGAWAI</td>
		</tr>
		<tr>
			<td width="130">Nip</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="Nip"></td>
		</tr>
		<tr>
			<td width="130">Nama Pegawai</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="NamaPegawai"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td>
				<select name="Jabatan">
					<option value="Direktur">Direktur</option>
					<option value="Manager">Manager</option>
					<option value="Pegawai">Pegawai</option>
					<option value="Staff">Staff</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="JenisKelamin" value="Laki-laki" checked="">Laki-laki
				<input type="radio" name="JenisKelamin" value="Perempuan" checked="">Perempuan
			</td>
		</tr>
        <tr>
			<td width="130">Total Gaji</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="TotalGaji"></td>
		</tr>
		<tr>
			<td colspan="10"align="center">
				<input type="Submit" name="Submit"value="KIRIM DATA">
				<input type="Reset" name="Reset"value="RESET DATA">
			</td>
		</tr>
	</table>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mahasiswa";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Submit'])){
	mysqli_query($conn,"insert into tbdatapegawai set
	Nip='$_POST[Nip]',
	NamaPegawai='$_POST[NamaPegawai]',
	Jabatan='$_POST[Jabatan]',
	JenisKelamin='$_POST[JenisKelamin]',
	TotalGaji='$_POST[TotalGaji]'") or die(mysqli_error($conn));
	echo "<script>alert('Data telah disimpan')</script>";
}
?>
</body>
</html>


