<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pertemuan 6 - Dompet Digital</title>
    <style>
        body {
            font-family: monospace;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            background: white;
            width: 400px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            border-bottom: 2px dashed #ccc;
            padding-bottom: 10px;
        }

        .transaksi-item {
            padding: 10px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
        }

        .masuk {
            color: green;
        }

        .keluar {
            color: red;
        }

        .saldo-box {
            background-color: #333;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: right;
            font-size: 1,2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Riwayat Transaksi</h2>

    <?php
        function formatRupiah($angka) {
            $hasil = "Rp " . number_format($angka, 0, ',', '.');
            return $hasil;
        };

        function transaksi(&$saldo_dompet, $jumlah, $jenis){
            $class_css = "";
            $tanda = "";

            if($jenis == "topup") {
                $saldo_dompet = $saldo_dompet + $jumlah;
                $class_css = "masuk";
                $tanda = "+ ";
            } else if($jenis == "bayar") {
                if($saldo_dompet >= $jumlah) {
                    $saldo_dompet = $saldo_dompet - $jumlah;
                    $class_css = "keluar";
                    $tanda = "- ";
                } else {
                    echo "<div class = 'transaksi-item' style = 'color:grey'>";
                    echo "<span> Gagal (Saldo Kurang) </span>";
                    echo "<span>" . formatRupiah($jumlah) . "</span>";
                    echo "</div>";
                    return;
                }
            }

            echo "<div class = 'transaksi-item {$class_css}'>";
            echo "<span>" . strtoupper($jenis) . "</span>";
            echo "<span>($tanda)" . formatRupiah($jumlah) . "</span>";
            echo "</div>";
        }

        $saldo_saya = 50000;
        transaksi($saldo_saya, 100000, "topup");
        transaksi($saldo_saya, 25000, "bayar");
        transaksi($saldo_saya, 12000, "bayar");
        transaksi($saldo_saya, 200000, "bayar");
        transaksi($saldo_saya, 50000, "topup");
    ?>

        <div class="saldo-box">
            <small>Saldo Akhir</small>
            <div><?php echo formatRupiah($saldo_saya); ?></div>
        </div>
    </div>
</body>
</html>