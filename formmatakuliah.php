<html>
<head>
	<title>Form Input Matakuliah</title>
	<style>
	body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: Gray;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
		}
    </style>
</head>
<body bgcolor="">
<h2>Form Matakuliah</h2>
<form method="post"action="">
	<table width="500"bordercolor="white"bgcolor="white">
		<tr>
			<td width="130">No</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="no"></td>
		</tr>
		<tr>
			<td width="130">Kode Matakuliah</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="kodemk"></td>
		</tr>
		<tr>
			<td width="130">Nama Matakuliah</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="namamk"></td>
		</tr>
		<tr>
			<td width="130">SKS</td>
			<td width="10">:</td>
			<td width="200"><input type="text"name="sks"></td>
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
	mysqli_query($conn,"insert into tbmatakuliah set
	no='$_POST[no]',
	namamk='$_POST[namamk]',
	kodemk='$_POST[kodemk]',
	sks='$_POST[sks]'") or die(mysqli_error($conn));
	echo "<script>alert('Data telah disimpan')</script>";
}
?>
</body>
</html>


