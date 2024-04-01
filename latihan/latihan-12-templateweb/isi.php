<!-- Halaman Depan -->

<?php
$hal = $_GET['hal'];
if(!empty($hal)){
    include $menu_bawah[$hal];
}
else {
    include "home.php";
}
?>

