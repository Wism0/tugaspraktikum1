<?php
$nama = "Wismo";
$jari = 50;

if ($jari<0) {
    echo "error";
} else {
    echo $nama;
    $hasil = 3.14*$jari*$jari;
    echo "<br> hasilnya :".$hasil."<br>";
}

for($i=0;$i<10;$i++){
    echo "and <br>";
}
?>