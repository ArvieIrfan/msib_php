<?php

/*
Nama Mahasiswa : Budi Santoso => Variabel
Mata Kuliah : PHP => Variabel
Nilai : 80
Keterangan : lulus => Ternary
Grade : B => If/Else
Predikat : Bagus => SwitchCase
*/

$nama = "Budi Santoso";
$matkul = "PHP";
$nilai = 80;

$ket = ($nilai >= 60) ? "Lulus" : "Gagal";
if($nilai <= 0 ) $grade = 'E';
else if($nilai <= 40) $grade = 'D';
else if($nilai <= 70) $grade = 'C';
else if($nilai <= 80) $grade = 'B';
else if($nilai <= 100) echo $grade = 'A' ;
else $grade = '';

switch($grade){
    case 'A': $predikat = "Sangat Memuaskan";
    break;
    case 'B': $predikat = "Memuaskan";
    break;
    case 'C': $predikat = "Cukup";
    break;
    case 'D': $predikat = "Kurang";
    break;
    case 'E': $predikat = "Buruk";
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre> Nama Mahasiswa : <?= $nama; ?>.
 Mata Kuliah : <?= $matkul; ?>.
 Nilai : <?= $nilai; ?>.
 Keterangan : <?= $ket; ?>.
 Grade : <?= $grade; ?>.
 Predikat : <?= $predikat; ?></pre>
</body>
</html>