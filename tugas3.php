<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Processing</title>
</head>
<body>

<form method="post" action="">
    <label for="inputText">Masukkan teks:</label>
    <input type="text" name="inputText" id="inputText" required>
    <button type="submit" name="process">Proses</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["process"])) {
    $inputText = $_POST["inputText"];

    // Proses strtoupper
    $upperCaseText = strtoupper($inputText);
    echo "<p>Hasil strtoupper: $upperCaseText</p>";

    // Proses strtolower
    $lowerCaseText = strtolower($inputText);
    echo "<p>Hasil strtolower: $lowerCaseText</p>";

    // Proses strlen
    $textLength = strlen($inputText);
    echo "<p>Panjang teks: $textLength karakter</p>";
}
?>

</body>
</html>