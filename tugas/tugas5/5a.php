<?php
//Array Associative
// definisinya sama seperti arraynumerik, kecuali
// key-nya adalah strin yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Moh Hilmy Yasirurrizqy",
    "nrp" => "230040047",
    "email" => "hilmi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "3.jpg"
    ],
    [
    "nama" => "Ikhwan Azhary",
    "nrp" => "230040060",
    "email" => "ikhwan@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "1.jpg"
    ],
    [
    "nama" => "Ghani Aliandi",
    "nrp" => "230040049",
    "email" => "Ghani@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "2.jpg"
    ],
    [
    "nama" => "Zaki Ramadhan Wijaya",
    "nrp" => "230040056",
    "email" => "zaki@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "4.jpg"
    ],
    [
    "nama" => "Nadhil",
    "nrp" => "230040038",
    "email" => "nadhil@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "5.jpg"
    ],
    [
    "nama" => "Najran",
    "nrp" => "230040127",
    "email" => "najran@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "6.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"];?></li>
            <li>NRP: <?= $mhs["nrp"];?></li>
            <li>Email: <?= $mhs["email"];?></li>
            <li>jurusan: <?= $mhs["jurusan"];?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>