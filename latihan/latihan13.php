<?php 

// 1. fungsi tanpa parameter/argumen
function salam(){
    echo 'Selamat Pagi Semuannya';
}
salam(); // cetak function

// 2. Fungsi dengan parameter/argumen (...)
function sapa($kawan){
    echo "Selamat Pagi $kawan";
}
sapa("Rozir"); // cetak 1
echo '<br>';
$nama = 'Jamal';
sapa ($nama); // cetak 2

// 3. Fungsi dengan parameter/argumen beserta isinya 
function kabar($kawan='Sabardi'){
    echo "Apa kabar $kawan";
}
kabar(); // cetak 1
echo '<br>';
kabar("Ahmad"); // cetak 2
echo '<br>';
$siswa = 'Budi';
kabar($siswa);


// 4. Fungsi dengan void (tidak mengembalikan nilai)
echo '<br>';
function hitung($x, $y){
    $z = $x+$y;
    echo $z;
}
hitung(2,4);

// 5. Fungsi dengan return (mengembalikan nilai)
function tambah($a, $b){
    $c = $a+$b;
    echo '<br> Hasil dari $a + $b adalah '.$c;
    return $c;
}
tambah(2,4);

echo '<br>';
function hitungUmur($tahun_lahir){
    $umur = 2024 - $tahun_lahir;
    return $umur;
}
echo 'Umur saya sekarang adalah '.hitungUmur('1997').' tahun';