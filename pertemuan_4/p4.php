<?php
// penggunaan if
$nilaiujian = 70; // Variabel $nilaiujian diatur dengan nilai 70
if ($nilaiujian > 80) {
    // Jika nilai ujian lebih dari 80, maka akan menampilkan pesan "Anda Lulus"
    echo "Anda Lulus <br>";
} else {
    // Jika nilai ujian kurang dari atau sama dengan 80, maka akan menampilkan pesan "Anda Tidak Lulus"
    echo "Anda Tidak Lulus <br>";
}

// penggunaan switch
$hari = "senin"; // Variabel $hari diatur dengan nilai "senin"
switch ($hari) {
    case "senin":
        // Jika nilai $hari adalah "senin", maka pesan berikut akan ditampilkan
        echo "Hari ini adalah hari Senin <br>";
        break; // Mengakhiri eksekusi dalam blok switch
    case "selasa":
        echo "Hari ini adalah hari Selasa";
        break;
    case "rabu":
        echo "Hari ini adalah hari Rabu";
        break;
    case "kamis":
        echo "Hari ini adalah hari Kamis";
        break;
    case "jumat":
        echo "Hari ini adalah hari Jumat";
        break;
    case "sabtu":
        echo "Hari ini adalah hari Sabtu";
        break;
    case "minggu":
        echo "Hari ini adalah hari Minggu";
        break;
}

// penggunaan for loop
for ($a = 0; $a < 10; $a++) {
    // Perulangan akan dilakukan mulai dari $a = 0 hingga $a < 10
    // Pada setiap iterasi, nilai $a akan bertambah 1
    echo "Ini adalah perulangan ke $a <br>"; // Menampilkan urutan iterasi
}

// penggunaan while loop
$b = 1; // Inisialisasi variabel $b dengan nilai 1
while ($b < 10) {
    // Perulangan akan dilakukan selama $b < 10
    echo "Ini adalah perulangan ke $b <br>";
    $b++; // Nilai $b bertambah 1 setiap iterasi
}

// penggunaan do-while loop
$c = 0; // Inisialisasi variabel $c dengan nilai 0
do {
    // Perulangan ini akan dijalankan setidaknya satu kali, meskipun kondisi tidak terpenuhi
    echo "Ini adalah perulangan ke $c <br>";
    $c++; // Nilai $c bertambah 1 setiap iterasi
} while ($c < 10); // Perulangan akan terus dijalankan selama $c < 10

// penggunaan foreach
$array = ["Nola", "Rifqi", "Fika", "Aldo", "Ayaz"]; // Deklarasi array dengan beberapa nama
foreach ($array as $d) {
    // Perulangan foreach digunakan untuk iterasi setiap elemen dalam array
    echo "Nama siswa adalah $d <br>"; // Menampilkan setiap nama siswa
}
?>
