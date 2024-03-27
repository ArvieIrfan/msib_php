<form action="" method="post">
    <label for="">Username</label>
    <input type="text" name="username" id="" placeholder="masukkan nama anda"><br><br>
    <label for="">Password</label>
    <input type="password" name="password" id="" placeholder="masukkan password anda"><br><br>
    <input type="submit" name="masuk" value="login">
</form>

<?php
    if(isset($_POST['masuk'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user == 'admin' && $pass == 'rahasia'){
            session_start();
            $_SESSION['user'] = $user;
            header('location: beranda.php');
        }
        else {
            echo "<script> alert('username atau password anda salah! coba lagi...'); </script>";
        }
    }

?>