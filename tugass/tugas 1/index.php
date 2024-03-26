<?php

    $nama = "M.Irfan Hamdi";
    $kategori = ["Web Developer,"," Graphics Desaigner"];
    $umur = 20;
    $email = "downb805@gmail.com";
    $nohp = "0898-9295-595";
    $alamat = "Lolong Belanti 1, Padang Utara, Kota Padang";
    $bahasa = ["Bahasa Indonesia,"," Bahasa Inggris"];
    $kampus = "Universitas Metamedia";
    $Mitra = "PT Nurul Fikri Cipta Inovasi"

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 1 PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
  </head>
<body id="top">
<div class="page-content">
<div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
        <div class="content-center">
          <div class="h2 title"><?= $nama; ?></div>
          <p class="category text-white">
          <?php foreach($kategori as $k){
                echo $k ;
            } ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" >
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p><?php echo "Hello! Saya adalah $nama. "?><?php foreach($kategori as $k){ echo $k ; } ?>.</p>
            <p>Saya sedang menjalani perkuliahan di salah satu kampus di Padang yaitu <?= $kampus; ?>. Dan juga saya sedang menempuh pendidikan semester 5. Saat ini saya sedang mengikuti kegiatan Kampus Merdeka di tempat <?= $Mitra; ?>. Dan sedang belajar bahasa Pemograman PHP</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8"><?= $umur; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?= $email; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?= $nohp; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><?= $alamat; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8"><?php foreach($bahasa as $b){ echo $b ; } ?>.</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>