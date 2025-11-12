<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal 1: Cek Tahun Kabisat</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .hasil { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Soal 1: Pengecek Tahun Kabisat</h2>
    <form action="soal1.php" method="post">
        <label for="tahun">Masukkan Tahun:</label>
        <input type="number" id="tahun" name="tahun" required>
        <input type="submit" name="submit" value="Cek">
    </form>

    <div class="hasil">
        <?php
        // Cek apakah form sudah disubmit
        if (isset($_POST['submit'])) {
            // Ambil nilai tahun dari form
            $tahun = (int)$_POST['tahun'];

            // Logika pengecekan tahun kabisat
            // 1. Jika tahun habis dibagi 400, MAKA kabisat.
            // 2. Jika tidak, tapi habis dibagi 100, MAKA bukan kabisat.
            // 3. Jika tidak, tapi habis dibagi 4, MAKA kabisat.
            // 4. Selain itu, BUKAN kabisat.
            if (($tahun % 400 == 0) || ($tahun % 100 != 0 && $tahun % 4 == 0)) {
                echo "Tahun $tahun **adalah** tahun kabisat.";
            } else {
                echo "Tahun $tahun **bukan** tahun kabisat.";
            }
        }
        ?>
    </div>

</body>
</html>