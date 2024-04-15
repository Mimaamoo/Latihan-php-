<html>
<head>
    <meta charset="UTS-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GAJI PEGAWAI</title>
</head>
<body>
    <fieldset>
    <legend><h2>FORM GAJI PEGAWAI</h2></legend>
    <table>
        <tr>
            <td>Nip</td>
            <td>:</td>
            <td><input type="text" id="nip"></td>
        </tr>
        <tr>
            <td>Nama Pegawai</td>
            <td>:</td>
            <td><input type="text" id="nama"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenisKelamin" value="pria"> Laki-Laki
                <input type="radio" name="jenisKelamin" value="wanita"> Perempuan
            </td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>
                <select id="jabatan">
                    <option>___PILIH JABATAN___</option>
                    <option value="Direktur">Direktur</option>
                    <option value="Manager">Manager</option>
                    <option value="Sekretaris">Sekretaris</option>
                    <option value="Keuangan">Keuangan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jumlah Anak</td>
            <td>:</td>
            <td><input type="number" id="jumlahAnak" name="quantitas" required></td>
        </tr>
        <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td><input type="text" id="gajiPokok"></td>
        </tr>
        <tr>
            <td>Potongan</td>
            <td>:</td>
            <td><input type="text" id="potongan"></td>
        </tr>
    </table>

    <button type="button" onclick="hitungGaji()">Hitung Gaji</button>
    <button type="button" onclick="batal()">Batal</button>
    </fieldset>

    <div id="hasilGaji" style="margin-top: 20px; display: none;">
        <h3>Hasil Perhitungan Gaji</h3>
        <p id="outputNip"></p>
        <p id="outputNama"></p>
        <p id="outputTotalGaji"></p>
        <p id="outputjumlahAnak"></p>
        <p id="outputjenisKelamin"></p>
    </div>

    <script>
        function hitungGaji() {
            var nip = document.getElementById("nip").value;
            var nama = document.getElementById("nama").value;
            var jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked').value;
            var jabatan = document.getElementById("jabatan").value;
            var jumlahAnak = parseInt(document.getElementById("jumlahAnak").value);
            var gajiPokok = parseInt(document.getElementById("gajiPokok").value);
            var potongan = parseInt(document.getElementById("potongan").value);

            var tunjanganAnak = 0;
            if (jumlahAnak > 1) {
                tunjanganAnak = 200000;
            } else if (jumlahAnak === 1) {
                tunjanganAnak = 100000;
            }

            var totalGaji = gajiPokok + tunjanganAnak - potongan;

            document.getElementById("outputNip").innerHTML = "NIP: " + nip;
            document.getElementById("outputNama").innerHTML = "Nama Pegawai: " + nama;
            document.getElementById("outputTotalGaji").innerHTML = "Total Gaji: Rp. " + totalGaji.toLocaleString();
            document.getElementById("hasilGaji").style.display = "block";
        }   document.getElementById("outputjenisKelamin").innerHTML = "Jenis Kelamin: " + nip;

        function batal() {
            document.getElementById("nip").value = "";
            document.getElementById("nama").value = "";
            document.querySelector('input[name="jenisKelamin"]:checked').checked = false;
            document.getElementById("jabatan").value = "";
            document.getElementById("jumlahAnak").value = "";
            document.getElementById("gajiPokok").value = "";
            document.getElementById("potongan").value = "";

            
            document.getElementById("hasilGaji").style.display = "none";
        }
    </script>
</body>
</html>
