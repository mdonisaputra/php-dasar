<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");
// cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni"]; 
$arr1 = [123, "tulisan", false];

// Cara Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 Elemen pada Array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";
// Menambahkan elemen baru pada array
$hari[] = "Jum'at";
var_dump($hari);

?>