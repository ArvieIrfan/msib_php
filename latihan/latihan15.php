<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form - Kalkulator</title>
</head>
<body>
    <form action="" method="POST">
        <table align="center" border="0" cellpadding="10" cellspacing="0" width="30%">
            <thead>
                <tr bgcolor="khaki">
                    <th colspan="2">Kalkulator Keren</th>
                </tr>
            </thead>
            <tbody>
                <tr bgcolor="beige">
                    <td width="30%">Angka 1</td>
                    <td>
                        <input type="number" name="a1" id="">
                    </td>
                </tr>
                <tr bgcolor="beige">
                    <td width="30%">Angka 2</td>
                    <td>
                        <input type="number" name="a2" id="">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="khaki">
                    <th colspan="2">
                        <button type="submit" name="proses" value="tambah">+</button>
                        <button type="submit" name="proses" value="kurang">-</button>
                        <button type="submit" name="proses" value="kali">*</button>
                        <button type="submit" name="proses" value="bagi">/</button>
                        <button type="submit" name="proses" value="pangkat">^</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>

<?php

//buat fungsi
function hitung($a1,$a2,$tombol){
    if($tombol == 'tambah') $hasil = $a1 + $a2;
    else if($tombol == 'kurang') $hasil = $a1 - $a2;
    else if($tombol == 'kali') $hasil = $a1 * $a2;
    else if($tombol == 'bagi') $hasil = $a1 / $a2;
    else if($tombol == 'pangkat') $hasil = $a1 ** $a2;
    return $hasil;
}
error_reporting(0);
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$tombol = $_POST['proses'];
$hasil = hitung($a1,$a2, $tombol);
if(isset($tombol)){
    echo "<center>Hasil dari $a1 $tombol $a2 adalah $hasil<center>";
}