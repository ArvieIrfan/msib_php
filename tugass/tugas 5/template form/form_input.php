<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Form Nilai Ujian</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" align="center">Form Nilai Ujian</h2>
                    <form method="POST" action="form_hasil_input.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIM</label>
                                    <input class="input--style-4" type="number" name="nim" style="width: 212%;">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="nama" style="width: 212%;">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Kuliah</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="kuliah">
                                    <option disabled="disabled" selected="selected">--- Asal Tempat Kuliah ---</option>
                                    <option value="unand">Universitas Andalas</option>
                                    <option value="unp">Universitas Negeri Padang</option>
                                    <option value="metau">Universitas Metamedia</option>
                                    <option value="stikes">Sekolah Tinggi Ilmu Kesehatan</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Mata Kuliah</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="matkul">
                                    <option disabled="disabled" selected="selected">--- Pilih Matakuliah ---</option>
                                    <option value="pw">Pemograman Web</option>
                                    <option value="pbd">Pemograman Basis Data</option>
                                    <option value="pbo">Pemograman Berbasis Objek</option>
                                    <option value="pti">Pengantar Teknologi Informasi</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nilai</label>
                                    <input class="input--style-4" type="number" name="nilai" style="width: 212%;">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->