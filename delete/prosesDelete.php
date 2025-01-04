<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "dbpesanan";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Aktifkan error reporting untuk debugging selama pengembangan
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cek apakah parameter id_pelanggan ada dalam URL
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "dbpesanan";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Debugging parameter
if (isset($_GET['id_pelanggan'])) {
    $id = intval($_GET['id_pelanggan']);

    if ($id > 0) {
        $query = "DELETE FROM user WHERE id_pelanggan = $id";
        if (mysqli_query($conn, $query)) {
            header("Location: tampil.php"); // Redirect jika berhasil
            exit;
        } else {
            echo "Gagal menghapus data: " . mysqli_error($conn);
        }
    } else {
        echo "ID pelanggan tidak valid.";
    }
} else {
    echo "Parameter id_pelanggan tidak ditemukan.";
}

// Tutup koneksi
mysqli_close($conn);
?>
