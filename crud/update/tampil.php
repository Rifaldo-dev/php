<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dbpesanan";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("koneksi gagal :" . mysqli_connect_error());
}

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

$search =isset($_GET['search']) ? $_GET['search'] : '';
$query = "select * from user where nama_pelanggan LIKE '%search%' OR alamat_pelanggan  LIKE '%search%' OR nohp LIKE '%search%'";
$result = mysqli_query($conn, $query); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    border: 1px, solid #ddd;
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
}

.action-btn:hover {
    background-color: #45a049;
}
</style>


<body>
    <h2>Daftar Pelanggan</h2>
    <form method="GET" action="">
        <input type="text" name="search"  placeholder="ketik yang ingin dicari!" value =" <?=($search)?>;">
        <button type="submit">cari</button>

    </form>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th> No Hp</th>
            <th>Aksi</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style = 'text-align: center;'>" . $no++ . "</td>";
                echo "<td>" . $row['nama_pelanggan'] . "</td>";
                echo "<td>" . $row['alamat_pelanggan'] . "</td>";
                echo "<td>" . $row['nohp'] . "</td>";
                echo "<td style = 'text-align: center;'>";
                echo "<a href='pelangganEdit.php?id_pelanggan=" . $row['id_pelanggan'] . "' class='action-btn'>Update</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' style = 'text-align : center;'>Tidak Ada Data</td></tr>";
        }
    
        ?>
    </table>

    <?php
    mysqli_close($conn);
    ?>
</body>

</html>