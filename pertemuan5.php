<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            border: 1px solid #000;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .premium {
            background-color: #fffbe6;
        }

        .diskon {
            background-color: #e6f7ff;
            color: #0056b3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk Toko</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Harga</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $products = [
                    ["nama" => "Laptop Super Cepat", "harga" => 15000000],
                    ["nama" => "Mouse Gaming", "harga" => 850000],
                    ["nama" => "Monitor 4K Ultrawide", "harga" => 21000000],
                    ["nama" => "Keyboard Mekanikal", "harga" => 1200000],
                    ["nama" => "Headset Standar", "harga" => 450000],
                ];
                
                $nomor = 1;

                foreach ($products as $produk) {
                    $css_class = "";
                    $keterangan = "-";

                    if ($produk['harga'] > 20000000) {
                        $css_class = "premium";
                        $keterangan = "Produk Premium";
                    } elseif ($produk['harga'] < 10000000) {
                        $css_class = "diskon";
                        $keterangan = "Diskon";
                    }

                    echo "<tr class='{$css_class}'>
                            <td>". $nomor . "</td>
                            <td>". $produk['nama'] . "</td>
                            <td>Rp " . number_format($produk['harga'], 0, ',', '.') . "</td>
                            <td>". $keterangan . "</td>
                          </tr>";
                    $nomor++;
                }

            ?>
        </tbody>
    </table>
</body>
</html>