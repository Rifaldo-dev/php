<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dbpesanan";

$conn = mysqli_connect(hostname: $host, username: $user,password: $password, database: $database);
if (!conn) {
    die("koneksi gagal: " . mysqli_connet_error());
}
 $id = $_POST['id_pelanggan'];
 $nama = $_POST['nama_pelanggan'];
 $alamat = $_POST['alamat_pelanggan'];
 $nohp = $_POST['nohp'];

 $query = "UPDATE user SET nama_pelanggan='$nama',alamat_pelanggan='$alamat_pelanggan',nohp='$nohp',id_pelanggan='$id_pelanggan' WHERE id_pelanggan";
if (mysqli_query(mysql: $conn, query: $query) ){
    echo"Pelanggan sukses diupdate";
    header(header: "location: tampil.php")
} else{
    echo "error: " . $query. "<br>" . mysqli_error(mysql: $conn);

}
mysqli_close(mysql: $conn);
?>