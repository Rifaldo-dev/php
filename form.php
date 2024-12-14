<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Ayam Geprek</title>
</head>
<body>
    <h2>Form Pemesanan Ayam Geprek</h2>
    <form action="action.php" method="post">
        <div>
            <label for="idpesanan">ID Pesanan:</label>
            <input type="text" name="idpesanan" required>
        </div>
        <div>
            <label for="namapemesan">Nama Pemesan:</label>
            <input type="text" name="namapemesan" required>
        </div>
        <div>
            <label for="kode">Kode Pesan:</label>
            <select name="kode" id="kode" required>
                <option value="Drive in">Drive in</option>
                <option value="Take away">Take away</option>
            </select>
        </div>
        <div>
            <label>Pilihan Menu Pesanan:</label><br>
            <label for="mangga">Jus Mangga</label>
            <input type="radio" name="minuman" value="mangga" required><br>

            <label for="jambu">Jus Jambu</label>
            <input type="radio" name="minuman" value="jambu" required><br>

            <label for="nanas">Jus Nanas</label>
            <input type="radio" name="minuman" value="nanas" required><br>
        </div>
        <div>
            <label for="jumlahpesanan">Jumlah Pesanan:</label>
            <input type="number" name="jumlahpesanan" required>
        </div>
        <button type="submit">Pesan</button>
    </form>
</body>
</html>
