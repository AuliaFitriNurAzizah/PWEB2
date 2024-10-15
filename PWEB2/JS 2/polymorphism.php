<?php
// Parent class Pengguna
class Pengguna {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama karena nama sekarang private
    public function getNama() {
        return $this->nama;
    }

    // Metode aksesFitur akan diimplementasikan ulang oleh child class
    public function aksesFitur() {
        return $this->getNama();
    }
}

// Child class Dosen
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil konstruktor parent
        $this->mataKuliah = $mataKuliah;
    }

    // Override metode aksesFitur
    public function aksesFitur() {
        return "Dosen " . $this->getNama() . " dapat mengakses fitur manajemen perkuliahan untuk mata kuliah: " . $this->mataKuliah . ".";
    }
}

// Child class Mahasiswa
class Mahasiswa extends Pengguna {
    private $studentID;

    public function __construct($nama, $studentID) {
        parent::__construct($nama); // Memanggil konstruktor parent
        $this->studentID = $studentID;
    }

    // Override metode aksesFitur
    public function aksesFitur() {
        return "Mahasiswa " . $this->getNama() . " dengan student ID: " . $this->studentID . " dapat mengakses fitur pembelajaran online.";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen1 = new Dosen("Dr. Andi Prasetyo", "Pemrograman Berbasis Objek");
$mahasiswa1 = new Mahasiswa("Aulia Fitri Nur Azizah", "230102055");

// Memanggil metode aksesFitur() dari objek Dosen dan Mahasiswa
echo $dosen1->aksesFitur() . "<br>"; // Menggunakan <br> untuk baris baru di output HTML
echo $mahasiswa1->aksesFitur();
?>
