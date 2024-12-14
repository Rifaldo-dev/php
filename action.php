<?php

$ID = $_POST['idpesanan'];
$nama = $_POST['namapemesan'];
$kode = $_POST['kode'];
$menu = $_POST['minuman'];
$jumlah = $_POST['jumlahpesanan'];


if ($menu == "mangga") {
    $harga = 10000;
    $totalharga = $harga * $jumlah;
} elseif ($menu == "jambu") {
    $harga = 8000;
    $totalharga = $harga * $jumlah;
} elseif ($menu == "nanas") {
    $harga = 12000;
    $totalharga = $harga * $jumlah;
} else {
    die("Menu tidak valid.");
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "dbpesanan";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$query_check = "SELECT * FROM pesanan WHERE idpesanan = '$ID'";
$result_check = mysqli_query($conn, $query_check);

if (mysqli_num_rows($result_check) > 0) {
    
    echo "ID Pesanan sudah ada, pilih ID yang lain.";
} else {
    
    $query = "INSERT INTO pesanan (idpesanan, namapemesan, kode, minuman, jumlahpesanan, total_harga) 
              VALUES ('$ID', '$nama', '$kode', '$menu', '$jumlah', '$totalharga')";

    
    if (mysqli_query($conn, $query)) {
       
        echo "Data berhasil ditambahkan!";
    } else {
        
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

$conn->close();

?>

