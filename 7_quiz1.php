<html>
<head>
    <title>Form Pembelian Barang</title>
</head>
<body>
    <h2>Form Pembelian Barang</h2>
    <form id="barang-form">
        <label for="kode_barang">Kode Barang:</label>
        <select id="kode_barang" name="kode_barang">
            <option value="0001">0001</option>
            <option value="0002">0002</option>
            <option value="0003">0003</option>
        </select><br><br>

        <label for="nama_barang">Nama Barang:</label>
        <select id="nama_barang" name="nama_barang" onchange="updateLabel()">
            <option value="Aqua">Aqua</option>
            <option value="Indomie">Indomie</option>
            <option value="Beras">Beras</option>
        </select><br><br>

        <label for="satuan">Satuan:</label>
        <span id="satuan_label"></span><br><br>

        <label for="harga_barang">Harga Barang (Rp):</label>
        <span id="harga_barang_label"></span><br><br>

        <label for="quantitas">Quantitas:</label>
        <input type="number" id="quantitas" name="quantitas" required><br><br>

        <input type="button" value="Hitung" onclick="hitungTotal()">
    </form>

    <div id="result" style="display: none;">
        <h3>Hasil Pembelian</h3>
        <p>Kode Barang: <span id="result-kode"></span></p>
        <p>Nama Barang: <span id="result-nama"></span></p>
        <p>Satuan: <span id="result-satuan"></span></p>
        <p>Harga Barang (Rp): <span id="result-harga"></span></p>
        <p>Quantitas: <span id="result-quantitas"></span></p>
        <p>Sub Total (Rp): <span id="result-subtotal"></span></p>
        <p>Diskon (Rp): <span id="result-diskon"></span></p>
        <p>Total Pembayaran (Rp): <span id="result-total"></span></p>
    </div>

    <script>
        function updateLabel() {
            const nama_barang = document.getElementById("nama_barang").value;
            let satuan = "";
            let harga = "";

            switch (nama_barang) {
                case "Aqua":
                    kode_barang = "0001"
                    satuan = "1";
                    harga = "50,000";
                    break;
                case "Indomie":
                    kode_barang = "0002"
                    satuan = "1";
                    harga = "100,000";
                    break;
                case "Beras":
                    kode_barang = "0003"
                    satuan = "1";
                    harga = "300,000";
                    break;
            }

            document.getElementById("satuan_label").textContent = satuan;
            document.getElementById("harga_barang_label").textContent = "Rp. " + harga;
        }

        function hitungTotal() {
            const kode_barang = document.getElementById("kode_barang").value;
            const nama_barang = document.getElementById("nama_barang").value;
            const satuan = document.getElementById("satuan_label").textContent;
            const harga_barang = parseFloat(document.getElementById("harga_barang_label").textContent.replace("Rp. ", "").replace(",", ""));
            const quantitas = parseInt(document.getElementById("quantitas").value);

            const sub_total = harga_barang * quantitas;
            let diskon = 0;

            if (sub_total > 200000) {
                diskon = 0.10 * sub_total;
            } else if (sub_total > 100000) {
                diskon = 0.05 * sub_total;
            }

            const total = sub_total - diskon;

            document.getElementById("result-kode").textContent = kode_barang;
            document.getElementById("result-nama").textContent = nama_barang;
            document.getElementById("result-satuan").textContent = satuan;
            document.getElementById("result-harga").textContent = harga_barang;
            document.getElementById("result-quantitas").textContent = quantitas;
            document.getElementById("result-subtotal").textContent = sub_total;
            document.getElementById("result-diskon").textContent = diskon;
            document.getElementById("result-total").textContent = total;

            document.getElementById("result").style.display = "block";
        }
    </script>
</body>
</html>






