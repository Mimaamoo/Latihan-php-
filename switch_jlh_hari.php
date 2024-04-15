<?php
$namafile ="switch_jlh_hari.php";
?>
<html>
    <head>
        <title>Statement switch....case</title>
    </head>
    <body>
        <h1><center>MATERI KE 9: STATEMENT SWITCH...CASE</center></h1>
        <h2><font color="black"def</font></h2>
    <body>
        <h3><font color="blue">Demo Menggunakan Statement switch</font></h3>
        <form action="switch_jlh_hari.php"method="post">
            PILIH NAMA BULAN :
            <select name="bulan" size="1">
                <option value="0">[none]</option>
                <option value="1">[Januari]</option>
                <option value="2">[Februari]</option>
                <option value="3">[Maret]</option>
                <option value="4">[April]</option>
                <option value="5">[Mei]</option>
                <option value="6">[Juni]</option>
                <option value="7">[July]</option>
                <option value="8">[Agustus]</option>
                <option value="9">[September]</option>
                <option value="10">[Oktober]</option>
                <option value="11">[November]</option>
                <option value="12">[Desember]</option>
            </select>
            <input type="submit"name="btnsubmit"value="PROSES">
        </form>
        <?php
        if(isset($_POST["btnsubmit"])){
            $bulan = $_POST["bulan"];
            switch ($bulan) {
            case 1:$jumlah=31;break;
            case 2:$jumlah=28;break;
            case 3:$jumlah=31;break;
            case 4:$jumlah=30;break;
            case 5:$jumlah=31;break;
            case 6:$jumlah=30;break;
            case 7:$jumlah=31;break;
            case 8:$jumlah=30;break;
            case 9:$jumlah=31;break;
            case 10:$jumlah=30;break;
            case 11:$jumlah=31;break;
            case 12:$jumlah=30;break;
            default:
            echo "Anda Belum Memilih Bulan.";
            exit() ;
        }
        echo "Bulan $bulan berjumla =$jumlah hari";
    }
    ?>
    </body>
</html>