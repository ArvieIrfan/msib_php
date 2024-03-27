<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="" method="POST">
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama" id="">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tgl" id="">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" id="">Laki - Laki &nbsp;
            <input type="radio" name="jk" id="">Perempuan
        </div>
        <div>
            <input type="submit" value="simpan">
        </div>
    </form>
</body>
</html>
<hr>
<?php
error_reporting(0); // menghilangkan pesan error
echo 'Nama : '. $_POST['nama'] . '<br>';
echo 'Password : '. $_POST['password'] . '<br>';
echo 'Email : '. $_POST['email'] . '<br>';
echo 'Tanggal Lahir : '. $_POST['tgl'] . '<br>';
echo 'Jenis Kelamin : '. $_POST['jk'] . '<br>';