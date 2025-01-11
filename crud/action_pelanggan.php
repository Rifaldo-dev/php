<?php

$nama = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat_pelanggan'];
$nohp = $_POST['nohp'];


$conn = mysqli_connect("localhost", "root", "", "dbpesanan");
if(!$conn){
    die("koneksi gagal :" . mysqli_connect_error());
}
$query ="INSERT INTO `user`(`nama_pelanggan`, `alamat_pelanggan`, `nohp`) VALUES ('$nama','$alamat','$nohp')";
if(  mysqli_query($conn, $query)){
    echo "data berhasil di tambahkan";
}else{
    echo "error";
}
?>