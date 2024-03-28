<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10" align="center">
        <thead bgcolor="yellowgreen">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for($no=1;$no<=100;$no++){
                //tentukan warna genap atau ganjil konsep ternary
                // jika nomor modulus(%) 2 tidak ada sisa 0
                $warna = ($no % 2 == 0) ? 'red' : 'blue';
                ?>
                <tr bgcolor="<?= $warna; ?>">
                    <td><?= $no; ?></td>
                    <td>Siswa <?= $no; ?></td>
                    <td>Jl.Bogor Raya No. <?= $no; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>