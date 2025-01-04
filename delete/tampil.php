<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-btn {
            padding: 5px 10px;
            color: white;
            background-color: #4CAF50;
            border: none;
            cursor: pointer;
            text-decoration: none;
            margin-right: 5px;
        }

        .action-btn:hover {
            background-color: #45a049;
        }

        .delete-btn {
            background-color: #f44336;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <h2>Daftar Pelanggan</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Aksi</th>
        </tr>
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

        // Query untuk mendapatkan data
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style='text-align: center;'>" . $no++ . "</td>";
                echo "<td>" . $row['nama_pelanggan'] . "</td>";
                echo "<td>" . $row['alamat_pelanggan'] . "</td>";
                echo "<td>" . $row['nohp'] . "</td>";
                echo "<td style='text-align: center;'>";
                echo "<a href='pelangganEdit.php?id_pelanggan=" . $row['id_pelanggan'] . "' class='action-btn'>Update</a>";
                echo "<a href='prosesDelete.php?id_pelanggan=" . $row['id_pelanggan'] . "' class='action-btn delete-btn' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' style='text-align: center;'>Tidak Ada Data</td></tr>";
        }

        // Tutup koneksi database
        mysqli_close($conn);
        ?>
    </table>
</body>

</html>
