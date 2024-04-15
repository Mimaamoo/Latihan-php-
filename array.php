<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekerja Dengan Array</title>
</head>
<body>
    <?php
    function judul(){
        echo "<h2>Demo Ke 1 Membuat<br>"."dan Mengakses Elemen Array</h2><br>";
    }
    judul();
    $suku[0]="Jawa";
    $suku[1]="Sunda";
    $suku[2]="Batak";
    $suku[3]="Minang";
    $suku[4]="Dayak";
    echo "Beberapa Suku di Indonesia<br>";
    echo "$suku[0]<br>";
    echo "$suku[1]<br>";
    echo "$suku[2]<br>";
    echo "$suku[3]<br>";
    echo "$suku[4]<br>";
?>
</body>
</html>