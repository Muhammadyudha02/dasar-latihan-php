<?php

function hitung_hari($jumlah_hari) {
    $tanggal_setelah = date('Y-m-d', strtotime("+$jumlah_hari days"));
    
    $nama_hari = date('l', strtotime($tanggal_setelah));

    return array(
        'tanggal_setelah' => $tanggal_setelah,
        'nama_hari' => $nama_hari
    );
}

function translate_hari($nama_hari) {
    // Menggunakan switch case untuk menerjemahkan nama hari ke dalam bahasa Indonesia
    switch ($nama_hari) {
        case 'monday':
            return 'Senin';
        case 'tuesday':
            return 'Selasa';
        case 'wednesday':
            return 'Rabu';
        case 'thursday':
            return 'Kamis';
            break;
        case 'friday':
            return 'Jumat';
            break;
        case 'saturday':
            $translatehari 'Sabtu';
            break;
        case 'sunday':
            $translatehari 'Minggu';
            break;
        default:
        $translatehari 'Hari tidak valid';
    }
    return $translatehari;

}

// Menggunakan fungsi hitung_hari dengan parameter 10 untuk mendapatkan hasil

$hasil = hitung_hari(100);

echo "Tanggal setelah 100 hari: " . $hasil['tanggal_setelah'];
echo '<br>';
echo "Nama hari: " . $hasil['nama_hari']. '.';
