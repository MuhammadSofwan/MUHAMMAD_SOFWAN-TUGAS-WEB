<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir</title>
</head>
<body>
    <h3>Simulasi Tabungan Bank X</h3>
    <form method="post" action="">
        Saldo Awal: <input type="number" name="saldo_awal" required placeholder="Contoh: 1000000"><br><br>
        Jangka Waktu (Bulan): <input type="number" name="bulan" required placeholder="Contoh: 12"><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>
    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $saldo = $_POST['saldo_awal'];
        $durasi = $_POST['bulan'];
        $admin = 9000;

        echo "Saldo Awal: Rp. " . number_format($saldo, 0, ',', '.') . "<br>";
        echo "Durasi: " . $durasi . " bulan<br><br>";

        for ($i = 1; $i <= $durasi; $i++) {
            if ($saldo < 1100000) {
                $bunga = $saldo * (0.03 / 12);
            } else {
                $bunga = $saldo * (0.04 / 12);
            }

            $saldo = $saldo + $bunga - $admin;
        }

        echo "<b>Saldo Akhir setelah $durasi bulan adalah: Rp. " . number_format($saldo, 0, ',', '.') . "</b>";
    }
    ?>
</body>
</html>