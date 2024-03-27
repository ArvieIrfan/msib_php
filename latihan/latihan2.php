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
echo '<hr>';

$baju = "s";
switch($baju){
    case "L" : case "l" : echo "Large";
    break;
    case "M" : case "m" : echo "Medium";
    break;
    default : echo "Small";
}
echo '<hr>';
// TUGAS - SWICH CASE
// Jika nilai <= 0 nilai :Buruk
// Jika nilai <= 40 nilai :Kurang
// Jika nilai <= 70 nilai :Cukup
// Jika nilai <= 80 nilai :Memuaskan
// Jika nilai <= 100 nilai :Sangat Memuaskan
// Selain itu nilai : null
// Statement SwichCase

$nilai = 80;
switch ($nilai) {
    case $nilai <= 0 :
        echo "$nilai : Nilai Buruk";
        break;
    
    case $nilai <= 40 :
        echo "$nilai : Nilai Kurang";
        break;
    
    case $nilai <= 70 :
        echo "$nilai : Nilai Cukup";
        break;
    
    case $nilai <= 80 :
        echo "$nilai : Nilai Memuaskan";
        break;
    
    case $nilai <= 100 :
        echo "$nilai : Nilai Sangat Memuaskan";
        break;
    
    default:
        echo "Null";
        break;
}
echo '<hr>';
// TUGAS - SWICH CASE
// Jika nilai >= 85 dan nilai <= 100 Grade :A
// Jika nilai >= 75 dan nilai < 85 Grade :B
// Jika nilai >= 60 dan nilai < 75 Grade :C
// Jika nilai >= 35 dan nilai < 60 Grade :D
// Jika nilai >= 0 dan nilai < 35 Grade :E
// Selain itu nilai : null
// Statement SwichCase

$nilai1 = 60;
switch ($nilai) {
    case $nilai1 >= 0 && $nilai1 < 35 :
        echo "$nilai1 : Grade E";
        break;
    
    case $nilai1 >= 35 && $nilai1 < 60 :
        echo "$nilai1 : Grade D";
        break;
    
    case $nilai1 >= 60 && $nilai1 < 75 :
        echo "$nilai1 : Grade C";
        break;
    
    case $nilai1 >= 75 && $nilai1 < 85:
        echo "$nilai : Grade B";
        break;
    
    case $nilai1 >= 85 && $nilai1 <= 100 :
        echo "$nilai : Grade A";
        break;
    
    default:
        echo "Null";
        break;
}