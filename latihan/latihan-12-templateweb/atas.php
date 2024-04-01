<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dono</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header class="header">
        <a href="#" class="logo">
            <img src="img/logo.png" alt="">
        </a>
        <nav class="navbar">
            <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
            
            <?php
            include 'webmenu.php';
            // looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $value <br>";
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
            ?>
        </nav>
        <div class="icons">
            <div class="fa-solid fa-magnifying-glass" id="search-btn"></div>
            <div class="fa-solid fa-cart-shopping" id="cart-btn"></div>
            <div class="fa-solid fa-bars" id="menu-btn"></div>
        </div>
    </header>