<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1>Form Input Nilai</h1>
        <form method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama:</label> 
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="">--- Pilihan Mata Kuliah ---</option>
                        <option value="html">HTML</option>
                        <option value="uiux">UI/UX</option>
                        <option value="php">PHP</option>
                        <option value="laravel">Laravel</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                    <input id="nilai" name="nilai" type="number" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>


<?php

/*
Nama Mahasiswa : Budi Santoso => Variabel
Mata Kuliah : PHP => Variabel
Nilai : 80
Keterangan : lulus => Ternary
Grade : B => If/Else
Predikat : Bagus => SwitchCase
*/
error_reporting(0);
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];
$proses = $_POST['proses'];

$ket = ($nilai >= 60) ? "Lulus" : "Gagal";
if($nilai <= 0 ) $grade = 'E';
else if($nilai <= 40) $grade = 'D';
else if($nilai <= 70) $grade = 'C';
else if($nilai <= 80) $grade = 'B';
else if($nilai <= 100) $grade = 'A' ;
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
if(isset($proses)){
?>

<pre> Nama Mahasiswa : <?= $nama; ?>.
 Mata Kuliah : <?= $matkul; ?>.
 Nilai : <?= $nilai; ?>.
 Keterangan : <?= $ket; ?>.
 Grade : <?= $grade; ?>.
 Predikat : <?= $predikat; ?></pre>

 </div>
</body>
</html>

<?php } ?>