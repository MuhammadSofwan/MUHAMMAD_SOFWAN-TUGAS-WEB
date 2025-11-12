<?php
// Set locale ke Indonesia agar nama bulan menjadi bahasa Indonesia
setlocale(LC_TIME, 'id_ID.UTF-8', 'id_ID', 'Indonesian');

// Dapatkan bulan saat ini (angka 1-12)
$bulan_angka = date('n');

// Dapatkan nama bulan saat ini (misal: "November")
// strftime('%B') menggunakan locale, date('F') menggunakan bahasa default server (biasanya Inggris)
$nama_bulan = strftime('%B'); 

// Dapatkan tahun saat ini
$tahun = date('Y');

// Cek apakah tahun ini kabisat (1 jika kabisat, 0 jika bukan)
$is_kabisat = date('L'); 

$jumlah_hari = 0;

// Menggunakan konsep SWITCH untuk menentukan jumlah hari
switch ($bulan_angka) {
    case 2: // Februari
        // Gunakan ternary operator untuk cek kabisat
        $jumlah_hari = ($is_kabisat == 1) ? 29 : 28;
        break;

    case 4: // April
    case 6: // Juni
    case 9: // September
    case 11: // November
        $jumlah_hari = 30;
        break;

    default: // Selain bulan di atas (Jan, Mar, Mei, Jul, Agu, Okt, Des)
        $jumlah_hari = 31;
        break;
}

// Tampilkan hasilnya
echo "<h2>Soal 4: Jumlah Hari dalam Bulan Ini</h2>";
echo "<p>Bulan saat ini adalah: <strong>$nama_bulan $tahun</strong></p>";
echo "<p>Jumlah hari dalam bulan ini adalah: <strong>$jumlah_hari hari</strong></p>";

?>