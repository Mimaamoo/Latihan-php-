<html>
<hed>
<title>If lebih dari Dua Kondisi</title>
</hed>
<body>
	<h2><font face="algerian"color="blue">
	Demo Program dengan fungsi IF</font></h2>
	<form action="ifmajemuk.php"method="POST">
		Masukan Bilangan Bulat :
		<input type="text"name="bilangan"><br>
		<input type="submit"value="CEK BILANGAN">
	</form>
	<?php
	$bilangan=$_POST["bilangan"];
	if($bilangan>0){
		$str="POSITIF";
	}elseif($bilangan<0){
		$str="NEGATIF";
	}else{
	$str="NOL";
	}
	echo "$bilangan adalah bilangan $str";
	
	?>
	</body>
	</html>