<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INPUT DATA TRANSAKSI</title>
</head>
<body>
<h2>Form Input Data Transaksi</h2>
<form method="post"action="">
	<table width="450" align="center" bordercolor="white" bgcolor="white">
		<tr>
			<td width="130">NO. Transaksi</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="no"></td>
		</tr>
		<tr>
			<td width="130">Kode Barang</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="kodebrg"></td>
		</tr>
		<tr>
			<td width="130">Nama Barang</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="namabrg"></td>
		</tr>
		<tr>
			<td width="130">Harga Barang</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="hargabrg"></td>
		</tr>
        <tr>
			<td>Satuan</td>
			<td>:</td>
			<td>
				<select name="satu5an">
                    <option value=""></option>
					<option value="pcs">Pcs</option>
					<option value="kg">Kg</option>
				</select>
			</td>
		</tr>
        <tr>
			<td width="130">Jumlahh Barang</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="jumlahbrg"></td>
		</tr>
        <tr>
			<td>Pembayaran</td>
			<td>:</td>
			<td>
				<input type="radio" name="pembayaran" value="Cash" checked="">Cash
				<input type="radio" name="pembayaran" value="Kredit" checked="">Kredit
			</td>
		</tr>
		<tr>
			<td colspan="10"align="center">
				<input type="Submit" name="Submit"value="Simpan">
				<input type="Reset" name="Reset"value="Batal">
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
	mysqli_query($conn,"insert into tbdatatransaksi set
	no='$_POST[no]',
	kodebrg='$_POST[kodebrg]',
    namabrg='$_POST[namabrg]',
	hargabrg='$_POST[hargabrg]',
	satuan='$_POST[satuan]',
    jumlahbrg='$_POST[jumlahbrg]',
	pembayaran='$_POST[pembayaran]'") or die(mysqli_error($conn));
	echo "<script>alert('Data telah disimpan')</script>";
}
?>
</body>
</html>