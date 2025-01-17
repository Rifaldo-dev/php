<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbpesanan';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil ID pelanggan dari URL dan validasi
$id = isset($_GET['id_pelanggan']) ? (int)$_GET['id_pelanggan'] : null;

if ($id) {
    // Query untuk mengambil data pelanggan berdasarkan ID
    $query = "SELECT * FROM user WHERE id_pelanggan = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data pelanggan tidak ditemukan.";
        exit;
    }
} else {
    echo "ID pelanggan tidak diberikan.";
    exit;
}

// Tidak perlu menutup koneksi, tetap terbuka untuk digunakan di halaman.
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Pelanggan</h2>
    <form action="prosesUpdate.php" method="POST">
        <input type="hidden" name="id_pelanggan" value="<?php echo htmlspecialchars($row['id_pelanggan']); ?>">

        <div class="mb-3">
            <label for="NamaPelanggan" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="NamaPelanggan" name="NamaPelanggan"
                   value="<?php echo htmlspecialchars($row['nama_pelanggan']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat"
                   value="<?php echo htmlspecialchars($row['alamat_pelanggan']); ?>">
        </div>

        <div class="mb-3">
            <label for="No_Hp" class="form-label">Nomor HP:</label>
            <input type="number" class="form-control" id="No_Hp" name="No_Hp"
                   value="<?php echo htmlspecialchars($row['nohp']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>
