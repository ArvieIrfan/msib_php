<?php
// Array : sekumpulan data
// array numerik dan array asosiatif

// 1. Array Numerik
$ar_buah = ['Pepaya','Mangga','Pisang','Anggur','Jeruk'];

// cetak array
echo $ar_buah[4];
echo '<hr>';
//tampilkan jumlah total pada buah
$jumlah = count($ar_buah);
echo $jumlah;
echo '<hr>';

// lihat hasil data buah dengan foreach
foreach ($ar_buah as $ab) {
    echo "$ab &nbsp";
}
echo '<hr>';

// 2. Array Asosiatif
$ar_hewan = [10=>'Babi Ngepet', 20=>'Bebek', 'Kucing', 30=>'Putri Duyung', 'Anjing Galak'];
echo $ar_hewan[10];
echo '<hr>';

foreach ($ar_hewan as $id => $nama) {
    echo "$id $nama <br>";
}
echo '<hr>';

// 3. Array Multidimensi (Array didalam Array)
$daftar_tahanan = [
    ["nama"=>"Budi", "Alamat"=>"Depok", "Telp"=>212345, "status"=>"Jomblo"],
    ["nama"=>"Alif", "Alamat"=>"Bogor", "Telp"=>898123, "status"=>"Duda"],
    ["nama"=>"Jamal", "Alamat"=>"Mars", "Telp"=>743863, "status"=>"Jomblo Gatel"]
];

foreach ($daftar_tahanan as $namax) {
    echo "$namax[nama]";
}
echo '<hr>';

//3. ARRAY MULTIDIMENSI (ARRAY DALAM ARRAY)
//CARA 2:
$a1=["nama"=>"Budi", "Alamat"=>"Depok", "Telp"=>212345, "status"=>"Jomblo"];
$a2=["nama"=>"Alif", "Alamat"=>"Bogor", "Telp"=>898123, "status"=>"Duda"];
$a3=["nama"=>"Jamal", "Alamat"=>"Mars", "Telp"=>743863, "status"=>"Jomblo Gatel"];
$daftar_siswa = [$a1,$a2,$a3];
foreach ($daftar_siswa as $namaxx) {
    echo "$namaxx[nama] <br>";
}