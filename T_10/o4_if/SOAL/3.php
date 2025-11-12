<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal 3: Hitung Upah (Golongan)</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        div { margin-bottom: 10px; }
        .hasil { margin-top: 20px; font-size: 1.2em; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Soal 3: Hitung Upah Karyawan (Golongan)</h2>
    <form action="soal3.php" method="post">
        <div>
            <label for="jam_kerja">Jumlah Jam Kerja Seminggu:</label>
            <input type="number" id="jam_kerja" name="jam_kerja" required>
        </div>
        <div>
            <label for="golongan">Pilih Golongan Karyawan:</label>
            <select id="golongan" name="golongan" required>
                <option value="A">Golongan A (Rp 4.000/jam)</option>
                <option value="B">Golongan B (Rp 5.000/jam)</option>
                <option value="C">Golongan C (Rp 6.000/jam)</option>
                <option value="D">Golongan D (Rp 7.500/jam)</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Hitung Upah">
    </form>

    <div class="hasil">
        <?php
        // Cek apakah form sudah disubmit
        if (isset($_POST['submit'])) {
            // Konstanta
            define('UPAH_LEMBUR_PER_JAM', 3000);
            define('BATAS_JAM_NORMAL', 48);

            // Ambil data dari form
            $jam_kerja = (int)$_POST['jam_kerja'];
            $golongan = $_POST['golongan'];
            
            $upah_normal_per_jam = 0;

            // Tentukan upah normal per jam berdasarkan golongan
            switch ($golongan) {
                case 'A':
                    $upah_normal_per_jam = 4000;
                    break;
                case 'B':
                    $upah_normal_per_jam = 5000;
                    break;
                case 'C':
                    $upah_normal_per_jam = 6000;
                    break;
                case 'D':
                    $upah_normal_per_jam = 7500;
                    break;
            }

            // Hitung total upah
            $total_upah = 0;
            if ($jam_kerja <= BATAS_JAM_NORMAL) {
                // Jika jam kerja normal (<= 48 jam)
                $total_upah = $jam_kerja * $upah_normal_per_jam;
            } else {
                // Jika ada lembur (> 48 jam)
                $jam_normal = BATAS_JAM_NORMAL;
                $jam_lembur = $jam_kerja - BATAS_JAM_NORMAL;

                $upah_normal = $jam_normal * $upah_normal_per_jam;
                $upah_lembur = $jam_lembur * UPAH_LEMBUR_PER_JAM;

                $total_upah = $upah_normal + $upah_lembur;
            }

            // Tampilkan hasil
            echo "Karyawan Golongan $golongan dengan $jam_kerja jam kerja,";
            echo "<br>Menerima total upah: **Rp " . number_format($total_upah, 0, ',', '.') . ",-**";
        }
        ?>
    </div>

</body>
</html>