<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mahasiswa";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    $buka=mysqli_select_db($conn, $dbname);
    echo "database terhubung";
    if (!$buka) {
        echo "Database tdk dpt terhubung";
    }
} else{
    echo "mysql tidak terhubung";
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
if (isset($_POST['simpan'])) {
	$no=mysqli_real_escape_string($conn, $_POST['no']);
	$kodemk=mysqli_real_escape_string($conn, $_POST['kodemk']);
	$namamk=mysqli_real_escape_string($conn, $_POST['namamk']);
	$sks=mysqli_real_escape_string($conn, $_POST['sks']);
	$simpan=mysqli_query($conn,"INSERT INTO db_mahasiswa VALUES('no','kodemk','namamk','sks')");

	if ($simpan) {
		echo "<script>window.alert('Data Berhasil Disimpan')window.location='formmatakuliah.php'</script>";
	} else{
		echo "<script>window.alert('Data Gagal Disimpan')window.location='formmatakuliah.php'</script>";
	}
}
?>