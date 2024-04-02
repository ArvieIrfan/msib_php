<?php

class Mahasiswa {
    // Member variables
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;

    // Constructor
    public function __construct($nim, $nama, $kuliah, $matkul, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    // Function to get grade
    public function getGrade() {
        if ($this->nilai >= 85) return 'A';
        if ($this->nilai >= 70) return 'B';
        if ($this->nilai >= 60) return 'C';
        if ($this->nilai >= 55) return 'D'; // Assuming 55-59 is 'D'
        return 'E'; // Assuming below 55 is 'E'
    }

    // Function to get predikat based on grade
    public function getPredikat() {
        $grade = $this->getGrade();
        switch ($grade) {
            case 'A':
                return 'Sangat Memuaskan';
            case 'B':
                return 'Memuaskan';
            case 'C':
                return 'Cukup';
            case 'D':
                return 'Kurang';
            case 'E':
                return 'Tidak Lulus';
            default:
                return 'Tidak Diketahui';
        }
    }

    // Function to get status
    public function getStatus() {
        return $this->nilai >= 65 ? 'Lulus' : 'Tidak Lulus';
    }
}