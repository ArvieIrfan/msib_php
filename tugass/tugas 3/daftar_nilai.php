<?php

$d1 = ['nim'=>'011221', 'nama'=>'Aciel', 'nilai'=>78 ];
$d2 = ['nim'=>'011222', 'nama'=>'Adelio', 'nilai'=>56 ];
$d3 = ['nim'=>'011223', 'nama'=>'Baylor', 'nilai'=>41 ];
$d4 = ['nim'=>'011224', 'nama'=>'Bellamy', 'nilai'=>88 ];
$d5 = ['nim'=>'011225', 'nama'=>'Cashel', 'nilai'=>65 ];
$d6 = ['nim'=>'011226', 'nama'=>'Chatra', 'nilai'=>73 ];
$d7 = ['nim'=>'011227', 'nama'=>'Darius', 'nilai'=>34 ];
$d8 = ['nim'=>'011228', 'nama'=>'Ezio', 'nilai'=>52 ];
$d9 = ['nim'=>'011229', 'nama'=>'Haidar', 'nilai'=>82 ];
$d10 = ['nim'=>'011230', 'nama'=>'Ludwig', 'nilai'=>49 ];

$ar_daftar = [$d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9,$d10];

// deklarasi nama2 judul pada tabel header menggunakan looping array
$ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
// Fungsi agregat di array
$jumlah_nilai = array_column($ar_daftar, 'nilai');
$nilai_max = max($jumlah_nilai);
$nilai_min = min($jumlah_nilai);
$nilai_total = array_sum($jumlah_nilai);
$jumlah_mhs = count($ar_daftar);
$nilai_rata2 = $nilai_total / $jumlah_mhs;
// $jumlah_harga = array_column($ar_buah, 'harga');
// $harga_total = array_sum($jumlah_harga);
// $harga_tertinggi = max($jumlah_harga);
// $harga_terendah = min($jumlah_harga);
// $jumlah_transaksi = count($ar_buah);
// $harga_rata2 = $harga_total / $jumlah_transaksi;

$detail_nilai = [
    'Nilai Tertinggi'=>$nilai_max,
    'Nilai Terendah'=>$nilai_min,
    'Nilai Rata-rata'=>$nilai_rata2,
    'Jumlah Mahasiswa'=>$jumlah_mhs,
    'Jumlah Nilai Keseluruhan'=>$nilai_total
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah - Buahan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2 align="center">Daftar Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
            <?php
                foreach ($ar_judul as $judul) {
            ?>
            <th><?= $judul; ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody align="center">
            <?php
            $no = 1;
            foreach($ar_daftar as $daftar){
                $ket = ($daftar['nilai'] >= 65) ? 'Lulus' : 'Gagal';
                if ($daftar['nilai'] <= 100 &&  $daftar['nilai'] > 85) { $grade = 'A'; }
                else if ($daftar['nilai'] <= 85 && $daftar['nilai'] > 70) { $grade = 'B'; }
                else if ($daftar['nilai'] <= 70 && $daftar['nilai'] > 50 ) { $grade = 'C'; }
                else if ($daftar['nilai'] <= 50 && $daftar['nilai'] > 25) { $grade = 'D'; }
                else if ($daftar['nilai'] <= 25 && $daftar['nilai'] > 0) { $grade = 'E'; }
                else { $grade = ''; }

                switch($grade){
                    case 'A': $predikat = "Sangat Memuaskan"; $class = 'grade-A';
                    break;
                    case 'B': $predikat = "Memuaskan"; $class = 'grade-B';
                    break;
                    case 'C': $predikat = "Cukup"; $class = 'grade-C';
                    break;
                    case 'D': $predikat = "Kurang"; $class = 'grade-D';
                    break;
                    case 'E': $predikat = "Buruk"; $class = 'grade-E';
                    break;
                }
                ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $daftar['nim']; ?></td>
                <td><?= $daftar['nama']; ?></td>
                <td><?= $daftar['nilai']; ?></td>
                <td><?= $ket; ?></td>
                <td><?= $grade; ?></td>
                <td class="grade <?= $class; ?>"><?= $predikat; ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
                foreach ($detail_nilai as $detail => $values) {
            ?>
            <tr>
                <th colspan="3"><?= $detail; ?></th>
                <th colspan="4"><?= $values; ?></th>
            </tr>
            <?php  }  ?>
        </tfoot>
    </table>
</body>
</html>