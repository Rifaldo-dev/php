<?php
//lat if
$baterai = 1 ;
if ($baterai > 100 ){
    echo "maka saya masih main hp <br>";
    }else if ($baterai < 1 ){
        echo "maka saya tidur <br>";
}

$kamar ="depan";
switch($kamar){
case "depan":
    echo "kamar yang didepan telah diisi <br> ";
    break;

case "belakang":
    echo "kamar belakang kosong <br> ";
    break;
}

for ($a=0; $a < 1; $a++){
    echo " antrian ke $a <br>";

}

$b=1;
while ($b<2) {
    echo "kamu orang yang datang ke $b <br>";
    $b++;
}

$c = 0;
do {
    echo "urutan yang telat $c <br>";
    $c++;
}  while ($c < 2);
$array = ["solder","transistor", "timah", "kabel","papan pcb"];
foreach($array as $d) {
    echo "anda telah membeli $d <br>";
}




?>