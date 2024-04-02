<?php

require 'mahasiswa.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

$universitas = array(
    'unand' => 'Universitas Andalas',
    'unp' => 'Universitas Negeri Padang',
    'metau' => 'Universitas Metamedia',
    'stikes' => 'Sekolah Tinggi Ilmu Kesehatan'
);
$matakuliah = array(
    'pw' => 'Pemograman Web',
    'pbd' => 'Pemrograman Basis Data',
    'pbo' => 'Pemrograman Berbasis Objek',
    'pti' => 'Pengantar Teknologi Informasi'
);

$nmhs = new Mahasiswa($nim, $nama, $universitas[$kuliah], $matakuliah[$matkul], $nilai);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah - Buahan</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2 align="center">Daftar Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>        
                <th>NIM</th>
                <th>Nama</th>
                <th>Kuliah</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody align="center">
            <tr>
                <td><?= $nmhs->nim ?></td>
                <td><?= $nmhs->nama ?></td>
                <td><?= $nmhs->kuliah ?></td>
                <td><?= $nmhs->matkul ?></td>
                <td><?= $nmhs->nilai ?></td>
                <td><?= $nmhs->getGrade() ?></td>
                <td><?= $nmhs->getPredikat() ?></td>
                <td><?= $nmhs->getStatus() ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
