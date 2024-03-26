<?php

// variabel

// ini adalah contoh komentar dalam php

/* komentar 1
komentar 2
komentar 3
komentar 4 */


// mencetak
echo 'Belajar PHP';
echo '<br>';
echo 'Saya senang belajar "PHP"';
echo '<br>';
echo "Saya senang belajar \"PHP\"";
echo '<br>';
print 'Belajar MySQL';
echo '<hr>';

// varibel user
$nama = "Dono Warkop";
$alamat = "Bogor Raya";
$umur = 30;
$berat = 70.5;
$_pekerjaan = "Karyawan";
echo $nama;
echo $alamat;
echo $umur;
echo $berat;
echo "<br>";
echo "nama adalah adalah $nama, saya beralamat di $alamat <br>";
echo 'nama adalah adalah '.$nama.', saya beralamat di '.$alamat;
echo "<br> umur saya sekarang ini adalah $umur <br>";
echo "memiliki berat badan $berat";
echo "<br>pekerjaan saya yaitu $_pekerjaan";
echo "<hr>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Nama Saya : <?php echo $nama ?></h2>
    <h2>Saya Berumur : <?= $umur ?> Tahun</h2>

</body>
</html>

<?php

echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '<hr>';

// Variabel Konstanta
// define : untuk memanggil variabel konstanta
define('PELAJARAN','Php Dasar');
echo "Ini Matakuliah : ".PELAJARAN;
echo '<hr>';

$a = 100;
$b = 80;
echo $a+$b;
echo '<hr>';

// oprator aritmatika
$c = 5;
$d = 2;
echo $c+$d.'<br>';
echo $c-$d.'<br>';
echo $c*$d.'<br>';
echo $c/$d.'<br>';
echo $c%$d.'<br>';
echo $c**$d.'<br>';
echo pow($c,$d).'<br>';
echo pow(2,3).'<br>';
echo '<hr>';

// Soal :
// Diketahui jari-jari 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// r = 15
// rumus phi = 3.14
// rumus luas = phi*(r * r)
// rumus keliling = 2*phi*r

define('PHI', 3.14);
$r = 15; // ubah jari - jari
$luas = PHI * $r * $r;
$keliling = 2 * PHI * $r;
echo $luas . '<br>';
echo $keliling;
echo '<hr>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Jari - jarinya adalah : <?= $r ?></p>
</body>
</html>

<?php

$itungstring = "Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo '<br>';

// mengetahui tipe variabel
$huruf = "Dono";
$hasil = gettype($huruf);
echo $hasil;
echo '<br>';

$huruf = 100;
$hasil = gettype($huruf);
echo $hasil;
echo '<br>';

$huruf = 7.5;
$hasil = gettype($huruf);
echo $hasil;
echo '<br>';
echo '<hr>';

$nama = "M.Irfan Hamdi";
$alamat = "Lolong Belanti, Padang Utara, Kota Padang";
echo "<p style='color:darkorange'> Nama saya adalah $nama </p>";
echo "<p style='color:greenyellow'> Dan saya beralamatkan di $alamat </p>";

?>