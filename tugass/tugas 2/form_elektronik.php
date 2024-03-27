<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Alat Elektronik</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .modal {
            display: <?php echo isset($_POST['submit']) ? 'block' : 'none'; ?>;
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto;
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Belanja Alat Elektronik</h1>
        <form action="" method="post">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" name="nama" id="nama" required>

            <label for="produk">Produk Pilihan</label>
            <select name="produk" id="produk" required>
                <option value="">--- Pilihan Produk ---</option>
                <option value="TV">TV</option>
                <option value="Kulkas">Kulkas</option>
                <option value="Mesin Cuci">Mesin Cuci</option>
                <option value="AC">AC</option>
                <option value="Microwave">Microwave</option>
                <option value="Vacuum Cleaner">Vacuum Cleaner</option>
            </select>

            <label for="jumlah">Jumlah Beli</label>
            <input type="number" name="jumlah" id="jumlah" min="1" required>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <?php
    error_reporting(0);
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if($produk == 'TV'){
        $harsat = 1980000;
    }
    else if($produk == 'Kulkas'){
        $harsat = 3750000;
    }
    else if($produk == 'Mesin Cuci'){
        $harsat = 2870000;
    }
    else if($produk == 'AC'){
        $harsat = 2500000;
    }
    else if($produk == 'Microwave'){
        $harsat = 899000;
    }
    else if ($produk == 'Vacuum Cleaner') {
        $harsat = 576000;
    }
    else {
        $harsat = 0;
    }

    $tobel = $jumlah * $harsat;
    $diskon = 0.2 * $tobel;
    $ppn = 0.1 * ($tobel - $diskon);
    $hartot = ($tobel - $diskon) + $ppn;

    ?>

    <div class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 align="center">Faktur Pembelian</h2><br>
            <p>Nama Pelanggan : <?= $nama; ?></p>
            <p>Produk Pilihan : <?= $produk; ?></p>
            <p>Harga Satuan : Rp. <?= number_format($harsat); ?></p>
            <p>Total Belanja : Rp. <?= number_format($tobel); ?></p>
            <p>Potongan Diskon : Rp. <?= number_format($diskon); ?></p>
            <p>PPN : Rp. <?= number_format($ppn); ?></p>
            <p>Harga Bersih : Rp. <?= number_format($hartot); ?></p>
        </div>
    </div>


    <script>
        function closeModal() {
            var modal =document.querySelector('.modal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>
