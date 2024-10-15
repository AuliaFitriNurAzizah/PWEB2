<?php
// Class abstrak Pengguna
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
    
    // Fungsi umum yang bisa digunakan oleh semua class turunan
    public function getNama() {
        return $this->nama;
    }
}

// Class Mahasiswa yang mengimplementasikan metode abstrak
class Mahasiswa extends Pengguna {
    private $studentID;

    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Implementasi metode abstrak aksesFitur
    public function aksesFitur() {
        return "Mahasiswa " . $this->getNama() . " (ID: " . $this->studentID . ") dapat mengakses fitur pembelajaran online.";
    }
}

// Class Dosen yang mengimplementasikan metode abstrak
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Implementasi metode abstrak aksesFitur
    public function aksesFitur() {
        return "Dosen " . $this->getNama() . " mengajar mata kuliah " . $this->mataKuliah . " dan dapat mengakses fitur manajemen perkuliahan.";
    }
}

// Instansiasi objek dari class Mahasiswa dan Dosen
$mahasiswa1 = new Mahasiswa("Aulia Fitri Nur Azizah", "230102055");
$dosen1 = new Dosen("Dr. Andi Prasetyo", "Pemrograman Web");

// Memanggil metode aksesFitur() dari objek Mahasiswa dan Dosen
echo $mahasiswa1->aksesFitur() . "<br>";
echo $dosen1->aksesFitur();
?>
