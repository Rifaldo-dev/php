<?php

$ID = $_POST['idpesanan'];
$nama = $_POST['namapemesan'];
$kode = $_POST['kode'];
$menu = $_POST['minuman'];
$jumlah = $_POST['jumlahpesanan'];

if ($menu== "mangga"){
    $harga = 10000;
    $totalharga = $harga * $jumlah;
} elseif ($menu == "jambu"){
    $harga = 8000;
    $totalharga = $harga * $jumlah;
    } elseif ($menu == "nanas"){
        $harga = 12000;
        $totalharga = $harga * $jumlah;
    }
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "dbpesanan";
    $conn = new mysqli($host, $user, $pass, $db);

    if($conn){
        die("koneksi gagal: " . mysqli_connect_error());
    }
    $query ="INSERT INTO `pesanan`(`idpesanan`, `namapemesan`, `kode`, `minuman`, `jumlahpesanan`, `total_harga`) VALUES ('$id','$nama','$kode','$minuman','$jumlah','$totalharga')";
    if(  mysqli_query($conn, $query)){
        echo "data berhasil di tambahkan";
    }else{
        echo "error";
    }

?>

