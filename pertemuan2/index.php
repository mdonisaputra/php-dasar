<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

/*
echo "M. Doni Saputra";
echo "<br>";
print "M. Doni Saputra";
echo "<br>";
print_r ("M. Doni Saputra");
echo "<br>";
var_dump ("M.Doni Saputra");
*/

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka

// $nama = "Doni";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
//  $x = 10;
//  $y = 20;
//  echo $x * $y;

// penggabung string 
// .
// $nama_depan = "M Doni";
// $nama_belakang = "Saputra";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, /=, %=, .=
// $x = 1;
// $x *=5;
// echo $x;
// $nama = "M. Doni";
// $nama .= " ";
// $nama .= "Saputra";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
//var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
	<p><?php echo "Ini adalah paragraf"; ?></p>
</body>
</html>

-->
