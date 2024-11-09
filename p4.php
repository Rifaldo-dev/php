<?php
// penggunaan if
$nilaiujian =  70 ;
if ($nilaiujian > 80) {
    echo "Anda Lulus <br>";

} else {
    echo "Anda Tidak Lulus <br>";
}

// penggunaan switch
$hari ="senin";
switch($hari) {
case "senin" :
    echo "Hari ini adalah hari Senin <br> ";
    break;
case "selasa" :
    echo "Hari ini adalah hari Selasa";
    break;
case "rabu" :
    echo "Hari ini adalah hari rabu";
    break;
case "kamis" :
    echo "Hari ini adalah hari kamis";
    break;
case "jumat" :
    echo "Hari ini adalah hari jumat";
    break;
case "sabtu" :
    echo "Hari ini adalah hari sabtu";
    break;
case "minggu" :
    echo "Hari ini adalah hari minggu";
    break;
}

for ($a=0; $a < 10; $a++){
    echo " ini  adalah perulangan ke $a <br>";

}

//penggunaan while
    $b=1;
while ($b<10) {
    echo "ini adalah perulangan ke $b <br>";
    $b++;
}

$c = 0;
do {
    echo "ini adalah perulangan ke $c <br>";
    $c++;
}  while ($c < 10);

$array = ["Nola","Rifqi", "fika", "aldo","ayaz"];
foreach($array as $d) {
    echo "nama siswa adalah $d <br>";
}
?>