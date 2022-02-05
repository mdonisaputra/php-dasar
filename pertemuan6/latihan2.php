<?php
// $mahasiswa = [
//     ["M. Doni Saputra", "17100051", "Teknik Informatika", "doni.alfatih@gmail.com"],
//     ["Siti Fatimah", "16100075", "Akuntansi", "sitifatimah@gmail.com"]
// ];

// Array Associative
// Definisinya sama seperti Array Numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "M.Doni Saputra",
        "nrp" => "17100051",
        "jurusan" => "Teknik Informatika",
        "email" => "doni.alfatih@gmail.com",
        "gambar" => "doni.jpeg"
    ],
    [
        "nama" => "Siti Fatimah",
        "nrp" => "16100075",
        "jurusan" => "Akuntansi",
        "email" => "fatimahsiti@gmail.com",
        "gambar" => "fatimah.jpeg"
        // "tugas" => [90, 75, 100]
    ]
];
// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
<!--Menampilkan Array Mahasiswa Menggunakan Looping -->
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li> 
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li> 
    </ul>
<?php endforeach; ?>   

</body>
</html>