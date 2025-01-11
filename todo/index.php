<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'todolist');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil semua tugas
$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");

?>

<h2>Daftar Tugas</h2>
<ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li>
            <strong><?php echo $row['title']; ?></strong> 
            - <?php echo $row['description']; ?> 
            (<?php echo $row['due_date']; ?>)
            <small>[Status: <?php echo ucfirst($row['status']); ?>]</small>
            <!-- Tambahkan Tautan Edit dan Hapus -->
            <a href="edit_task.php?id=<?php echo $row['id']; ?>">Edit</a> | 
            <a href="delete_task.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">Hapus</a>
        </li>
    <?php endwhile; ?>
</ul>

