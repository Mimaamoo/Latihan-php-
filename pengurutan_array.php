<html>
<head>
    <title> Mengurutkan Array Secara Ascending dan Descending</title>
</head>
<body>
    <h1> MENGURUTKAN DENGAN ARRAY</h1>
    <?php
    function judul(){
        echo "<h2> Demo Ke 2 Mengurutkan Array <br>".
        "Menggunakan Fungsi Sort dan Rsort</h2>";
    }
    judul();
        $suku=array("Jawa","Sunda","Batak","Minang","Dayak");
        echo "<strong> Sebelum Diurutkan : </strong><br>";
        foreach($suku as $key=>$value){
            echo "$key:$value"."<br>";
    
    }
    sort($suku);
    echo"<br><strong> Setelah Diurutkan (ASC) :</strong><br>";
    foreach ($suku as $key=>$value){
        echo "$key:$value"."<br>";
}
    rsort($suku);
    echo"<br><strong> Setelah Diurutkan (DESC) :</strong><br>";
    foreach ($suku as $key=>$value){
        echo "$key:$value"."<br>";
    }
?>
    </body>
    </html>
