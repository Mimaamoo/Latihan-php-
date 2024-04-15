<html>
<hed>
<title>If dengan Dua Kondisi</title>
</hed>
<body>
	<h2><font face="algerian"color="blue">
	Demo Program dengan fungsi IF</font></h2>
	<form action="if.php"method="POST">
		Masukan Bilangan Bulat :
		<input type="text"name="bilangan"><br>
		<input type="submit"value="CEK BILANGAN">
	</form>
	<?php
	$bilangan=$_POST["bilangan"];
	if($bilangan%2==0){
		$str="GENAP";
	}else{
		$str="GANJIL";
	}
	echo "$bilangan adalah bilangan $str";
	?>
	</body>
	</html>