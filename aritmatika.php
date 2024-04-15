<html>
<head>
	<title>Input Output dengan Keyboard</title>
</head>
<body>
	<form action="aritmatika.php"method="POST">
		<table>
			<caption>Form Input Nilai</caption>
			<tr>
				<td width="30%">Nilai a :</td>
				<td><input type="text"name=a></td>
			</tr>
			<tr>
				<td width="30%">Nilai b :</td>
				<td><input type="text"name=b></td>
			</tr>
			<tr>
				<td cosplan="2"align="center">
					<input type="submit"value="HITUNG">
				</td>
			</tr>
		</table>
	</form>
	<?php
	$penjumlahan=$_POST['a']+$_POST['b'];
	$pengurangan=$_POST['a']-$_POST['b'];
	$perkalian=$_POST['a']*$_POST['b'];
	echo "<pre>";
	echo "<b>Hasil Perhitungan</b><br>";
	echo "============================<br>";
	echo "Hasil Penjumlahan =",$penjumlahan,"<br>";
	echo "Hasil pengurangan =",$pengurangan,"<br>";
	echo "Hasil perkalian	  =",$perkalian,"<br>";
	echo "</pre>";
	?>
</body>
</html>