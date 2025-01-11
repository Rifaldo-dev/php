<h1>To-Do List</h1>
    <form action="add_list.php" method="post">
    <label for="title">Judul Tugas:</label>
    <input type="text" name="title" id="title" required>
    <br><br>
    <label for="description">Deskripsi:</label>
    <textarea name="description" id="description"></textarea>
    <br><br>
    <label for="due_date">Tenggat Waktu:</label>
    <input type="date" name="due_date" id="due_date">
    <br><br>
    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
    </select>
    <br><br>
    <button type="submit">Tambah Tugas</button>
</form>
<a href="../index.php"> <- kembali</a>