<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ltrim() dan trim()</title>
</head>
<body>
    <h2>Demo menghilangkan spasi awal dan akhir string</h2>
    <?php
    echo "menggunakan ltrim():<br>";
    $str1=" Modul Praktikum pemrograman Web";
    echo "\$str1:$str1<br>";
    echo "Panjang karakter :".strlen($str1);
    echo "<br>";
    $s1=ltrim($str1);
    echo "\$str1:$str1<br>";
    echo "Panjang karakter:".strlen($str1);
    echo "<br>";
    echo "Menggunakan trim():<br>";
    $str2=" Modul Praktikum pemrograman Web ";
    echo "\$str2:$str2<br>";
    echo "Panjang karakter :".strlen($str2);
    echo "<br>";
    $s2=ltrim($str2);
    echo "\$str2:$str2<br>";
    echo "Panjang karakter:".strlen($str2);
    echo "<br>";
    ?>
</body>
</html>