<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dbpesanan";

// Koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$id_pelanggan = isset($_POST['id_pelanggan']) ? (int)$_POST['id_pelanggan'] : null;
$nama = isset($_POST['NamaPelanggan']) ? mysqli_real_escape_string($conn, $_POST['NamaPelanggan']) : null;
$alamat = isset($_POST['Alamat']) ? mysqli_real_escape_string($conn, $_POST['Alamat']) : null;
$nohp = isset($_POST['No_Hp']) ? mysqli_real_escape_string($conn, $_POST['No_Hp']) : null;

// Validasi ID pelanggan
if (!$id_pelanggan) {
    echo "ID pelanggan tidak valid.";
    exit;
}

// Query update
$query = "UPDATE user 
          SET nama_pelanggan = '$nama', 
              alamat_pelanggan = '$alamat', 
              nohp = '$nohp' 
          WHERE id_pelanggan = $id_pelanggan";

if (mysqli_query($conn, $query)) {
    echo "Pelanggan sukses diupdate.";
    header("Location: tampil.php");
    exit;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
