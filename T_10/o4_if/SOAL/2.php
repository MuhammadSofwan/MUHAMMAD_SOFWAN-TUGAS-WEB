<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal 2: Hitung Upah</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .hasil { margin-top: 20px; font-size: 1.2em; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Soal 2: Hitung Upah Karyawan</h2>
    <form action="soal2.php" method="post">
        <label for="jam_kerja">Jumlah Jam Kerja Seminggu:</label>
        <input type="number" id="jam_kerja" name="jam_kerja" required>
        <input type="submit" name="submit" value="Hitung Upah">
    </form>

    <div class="hasil">
        <?php
        // Cek apakah form sudah disubmit
        if (isset($_POST['submit'])) {
            // Konstanta upah
            define('UPAH_NORMAL_PER_JAM', 2000);
            define('UPAH_LEMBUR_PER_JAM', 3000);
            define('BATAS_JAM_NORMAL', 48);

            // Ambil data dari form
            $jam_kerja = (int)$_POST['jam_kerja'];
            $total_upah = 0;

            if ($jam_kerja <= BATAS_JAM_NORMAL) {
                // Jika jam kerja normal (<= 48 jam)
                $total_upah = $jam_kerja * UPAH_NORMAL_PER_JAM;
            } else {
                // Jika ada lembur (> 48 jam)
                $jam_normal = BATAS_JAM_NORMAL;
                $jam_lembur = $jam_kerja - BATAS_JAM_NORMAL;

                $upah_normal = $jam_normal * UPAH_NORMAL_PER_JAM;
                $upah_lembur = $jam_lembur * UPAH_LEMBUR_PER_JAM;

                $total_upah = $upah_normal + $upah_lembur;
            }

            // Tampilkan hasil dengan format Rupiah
            echo "Total upah yang diterima: **Rp " . number_format($total_upah, 0, ',', '.') . ",-**";
        }
        ?>
    </div>

</body>
</html>