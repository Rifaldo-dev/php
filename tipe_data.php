<?php
// Integer: menyimpan bilangan bulat
$umur = 25; // Deklarasi variabel umur dengan nilai 25 (tipe integer)
echo "Umur saya adalah $umur tahun<br >"; // Output: Umur saya adalah 25 tahun

// Float: menyimpan bilangan desimal
$berat = 60.5; // Deklarasi variabel berat dengan nilai 60.5 (tipe float)
echo "Berat badan saya adalah $berat kg<br>"; // Output: Berat badan saya adalah 60.5 kg

// String: menyimpan teks atau karakter
$nama = "Aldo"; // Deklarasi variabel nama dengan teks "Aldo" (tipe string)
echo "Nama saya adalah $nama<br>"; // Output: Nama saya adalah Aldo

// Boolean: menyimpan nilai true (benar) atau false (salah)
$isStudent = true; // Deklarasi variabel isStudent dengan nilai true (tipe boolean)
if ($isStudent) { // Mengecek jika isStudent bernilai true
    echo "Saya adalah seorang pelajar<br>"; // Output: Saya adalah seorang pelajar
}

// Array: menyimpan kumpulan nilai dalam satu variabel
$buah = array("apel", "jeruk", "mangga"); // Deklarasi array buah dengan 3 elemen
echo "Buah favorit saya: " . $buah[0] . "<br>"; // Output: Buah favorit saya: apel
// Array bisa diakses dengan indeks (dimulai dari 0)

// Null: variabel yang tidak memiliki nilai
$nilai = null; // Deklarasi variabel nilai dengan tipe null (tidak ada nilai)
echo "Nilai saat ini: " . var_export($nilai, true) . "<br>"; // Output: Nilai saat ini: NULL
// var_export() untuk menampilkan nilai null dengan jelas

// Object: tipe data yang mewakili instansi dari sebuah class
class Mobil { // Mendeklarasikan class Mobil
    public $warna = "merah"; // Properti warna dengan nilai default "merah"
}
$sedan = new Mobil(); // Membuat objek baru dari class Mobil
echo "Warna mobil saya adalah " . $sedan->warna . "<br>"; // Output: Warna mobil saya adalah merah
// Objek mengakses properti menggunakan tanda panah "->"
?>
