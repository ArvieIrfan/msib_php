<?php 

// fungsi if
// jika umur lebih dari 20 tahun, maka anda dapat mengendari mobil
// jika umur lebih dari 17 tahun, anda dapat mengendarai motor
// jika umur lebih dari 10 tahun, anda dapat mengendari sepeda
// selain itu tidak boleh

$umur = 18; // ubah umur
if($umur > 20){
    echo "Kamu dapat mengendarai mobil";
}
else if($umur > 17){
    echo "kamu dapat mengendarai motor";
}
else if($umur > 10){
    echo "kamu dapat mengendarai sepeda";
}
else {
    echo "Kamu tidak boleh bawa apa - apa";
}

echo '<br>';
// jika umur < 40 dan >= 17 ket : dewasa
// jika umur < 17 dan >= 9 ket : remaja
// jika umur < 9 dan > 5 ket : anak - anak
// jika umur <= 5 dan umur > 0 ket : balita
// selain itu umur >= 40 ket : tua
// Jawaban :

$nama = "Esta";
$ket = "";
if($umur < 40 && $umur >= 17){
    $ket = "Dewasa";
}
else if($umur < 17 && $umur >= 9){
    $ket = "Remaja";
}
else if($umur < 9 && $umur > 5){
    $ket = "Anak - Anak";
}
else if($umur <= 5 && $umur > 0){
    $ket = "Balita";
}
else{
    $ket = "Tua";
}

echo "Nama Saya adalah $nama dan Umur saya adalah $umur. dan sekarang saya sudah ". $ket;

// soal :
// jika nilai > 6, maka nilai bagus
// selain itu buruk
echo '<br>';
$nilai = 5;
$ket = ($nilai > 6) ? "Bagus" : "Buruk";
echo $ket;