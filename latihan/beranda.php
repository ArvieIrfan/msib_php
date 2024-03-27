<?php

    session_start();
    if(!$_SESSION['user']){
        header('location: latihan6.php');
    }

    ?>

    <h1>Selamat Datang <?= $_SESSION['user']; ?> di WEB NF</h1>
    <br>

    <form action="" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

    <?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location: latihan6.php');
    }

    ?>