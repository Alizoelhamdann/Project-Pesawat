<?php

// Mengambil data JSON yang berisi rute-rute penerbangan dari file data.json
$json_data = file_get_contents('data.json');
$routes = json_decode($json_data, true); // Mendekode JSON menjadi array asosiatif

// Mengambil nilai dari formulir yang dikirim melalui metode POST
$maskapai = $_POST['maskapai'];
$bandara_asal = $_POST['bandara_asal'];
$bandara_tujuan = $_POST['bandara_tujuan'];
$harga = $_POST['harga'];

// Fungsi untuk mendapatkan pajak berdasarkan nama bandara
function getTax($tax) {
    switch ($tax) {
        case 'Soekarno-Hatta (CGK)':
            return 50000;
        case 'Husein Sastranegara (BDO)':
            return 30000;
        case 'Abdul Rachman Saleh (MLG)':
            return 40000;
        case 'Juanda (SUB)':
            return 40000;
        case 'Ngurah Rai (DPS)':
            return 80000;
        case 'Hasanuddin (UPG)':
            return 70000;
        case 'Inanwatan (INX)':
            return 90000;
        case 'Sultan Iskandarmuda (BTJ)':
            return 70000;
        default:
            return 0;
    }
}

// Menghitung pajak untuk bandara asal dan tujuan
$tax_bandara_asal = getTax($bandara_asal);
$tax_bandara_tujuan = getTax($bandara_tujuan);
$total_tax = $tax_bandara_asal + $tax_bandara_tujuan;

// Menghitung total harga tiket termasuk pajak
$total_harga = $harga + $total_tax;

// Membuat array baru untuk rute penerbangan yang akan ditambahkan ke data yang sudah ada
$new_route = array(
    "maskapai" => $maskapai,
    "bandara_asal" => $bandara_asal,
    "bandara_tujuan" => $bandara_tujuan,
    "harga" => $harga,
    "total_tax" => $total_tax,
    "total_harga" => $total_harga 
);

// Menambahkan rute baru ke dalam array $routes
$routes[] = $new_route;

// Fungsi untuk mengurutkan $routes berdasarkan nama maskapai secara alfabetis
function sortRoutesByName($a, $b) {
    return strcmp(strtolower($a['maskapai']), strtolower($b['maskapai']));
}

// Mengurutkan $routes menggunakan fungsi sortRoutesByName
usort($routes, 'sortRoutesByName');

// Menyimpan kembali $routes yang sudah diupdate ke dalam file data.json
file_put_contents('data.json', json_encode($routes, JSON_PRETTY_PRINT));

// Redirect ke halaman config.php setelah proses selesai
header("Location: config.php");
exit();

?>
