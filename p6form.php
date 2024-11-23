<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Ayam Geprek</title>
</head>
<body>
<h2> Form Pemesanan Ayam Geprek </h2>
<form action="p6action.php" method="post">
<div>
<label for="idpesanan"> ID Pesanan </label>
<input type="text" name="idpesanan">
</div>
<div>
<label for="namapemesan"> Nama Pemesan </label>
<input type="text" name="namapemesan">
</div>
<div>
<label for="kode"> Kode Pesan</label>
<select name="kode" id="kode">
</div>
    <div>
    <option select>Pilih</option>
    <option value="Dive in"> Drive in</option>
    <option value="take away"> Take away</option>
</select>
</div>
<div>
<label for="menu"> Pilihan Menu Pesanan</label>
</div>
<div>
<label for="mangga">Jus Mangga</label>
<input type="radio" name= "minuman" value="mangga">
</div>

<div>
<label for="jambu">Jus jambu</label>
<input type="radio" name= "minuman" value="jambu">
</div>

<div>
<label for="nanas">Jus nanas</label>
<input type="radio" name= "minuman" value="nanas">
</div>

<div>
<label for="jumlahpesanan"> Jumlah pesanan</label>
<input type="number" name= "jumlahpesanan" id ="jumlahpesanan">
</div>

<button type="submit" class="btn btn-primary "> Pesan</button>



</body>
</html>