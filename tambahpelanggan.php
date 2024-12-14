<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AYAM GEPREK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="short icon" href="../image/TES.png">

</head>
<body>
<div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <img src="../image/TES.png" alt="logo toko" width="50px">
                    <a class="navbar-brand" href="index.php">AYAM GEPREK</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="pelanggan.php">Pelanggan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="pemakaian.php">menu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="laporanpembayaran.php">Laporan Pembayaran</a></li>
                                    <li><a class="dropdown-item" href="tambahpelanggan.php">Tambah Pelanggan</a></li>
                                    <li><a class="dropdown-item" href="tambahpembayaran.php">Tambah Pembayaran</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>    

    <h2>form pelanggan</h2>
    <form action="action_pelanggan.php" method="post">
        <div>
            <label for="nama_pelanggan"> Nama Pelanggan:</label>
            <input type="text"  name="nama_pelanggan">
        </div>
        <div class="alamat">
            <label for="alamat_pelanggan"> Alamat Pelanggan:</label>
            <input type="text" name= "alamat_pelanggan">
        </div>
        <div class="nohp">
            <label for="nohp"> No HP Pelanggan:</label>
            <input type="text" name="nohp">
        </div>
        <div class="button">
            <button type= "submit" class="btn btn-primary "> submit</button>
        </div>
</body>
</html>