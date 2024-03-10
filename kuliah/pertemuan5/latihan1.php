<?php
//1. Membuat Array
$hari = array("senin", "selasa", "rabu");
$bulan = ["Januari", "Februari","Maret"];
$mhs = ["zaki", 3.2, false ];

//2. Mencetak Array (1)
// cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";

// cetak seluruh isi array
// var_dump() atau print_r()
// digunakan untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mhs);
echo "<hr>";

//3. Manipulasi Array
// Menambah isi array
// Di akhir : []atau array_push()
$hari[] = "Kamis";
$hari[]= "Jumat";
print_r($hari);
echo "<br>";

//4. Mencetak Array (2)

?>