<?php


// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'todolist');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$title = $_POST['title'];
$description = $_POST['description'];
$due_date = $_POST['due_date'];

// Insert data ke database
$stmt = $conn->prepare("INSERT INTO tasks (title, description, due_date) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $description, $due_date);

if ($stmt->execute()) {
    echo "Tugas berhasil ditambahkan!";
} else {
    echo "Terjadi kesalahan: " . $stmt->error;
}

// Redirect kembali ke halaman utama
header("Location: index.php");
exit;
?>
