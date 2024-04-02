<?php

class Siswa{
    //member 1 - variabel
    public $nama;
    public $nilai;
    public $pelajaran;

    // member 2 (method) - constructor
    public function __construct($nama, $nilai, $pelajaran){
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->pelajaran = $pelajaran;
    }

    // member 3 - function return
    public function getHasil(){
        if ($this->nilai > 55) return "Lulus";
        else return "Tidak Lulus";
    }

}