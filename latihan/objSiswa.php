<?php

require 'siswa.php';

// ciptakan objek
$ns1 = new Siswa('Jamal', 40, 'PHP');
$ns2 = new Siswa('Dono', 90, 'UIX');
$ns3 = new Siswa('Tina', 70, 'Laravel');

$ar_siswa = [$ns1, $ns2, $ns3];

foreach($ar_siswa as $asis){
    echo $asis->nama. ' '. $asis->nilai. ' '.$asis->pelajaran. '<br>';
}

// cetak
echo $ns1->nama;
echo $ns1->nilai;
echo $ns1->pelajaran;
echo $ns1->getHasil();


// $ns1 = new Siswa();
// $ns1->nama = "Jamal";
// $ns1->nilai = 90;
// $ns1->pelajaran = "PHP";

// // cetak
// echo $ns1->nama;
// echo $ns1->nilai;
// echo $ns1->pelajaran;
// echo $ns1->getHasil();

?>
<hr>
<h2 align="center">Daftar Nilai Siswa</h2>
<table border="1" width="50%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Pelajaran</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($ar_siswa as $sis) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $sis->nama; ?></td>
            <td><?= $sis->nilai; ?></td>
            <td><?= $sis->pelajaran; ?></td>
            <td><?= $sis->getHasil(); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>