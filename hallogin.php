<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
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
<body>
<form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="text" name="pasword" required><br>

        <input type="submit" name="login" value="LOGIN" >

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mahasiswa";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['login'])){
	mysqli_query($conn,"insert into tblogin set
	username='$_POST[username]',
	password='$_POST[password]'") or die(mysqli_error($conn));
	echo "<script>alert('Data telah disimpan')</script>";
}
?>
</body>
</html>