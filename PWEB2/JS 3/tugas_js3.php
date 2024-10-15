<?php
// Kelas Person sebagai induk
class Person {
    protected $name;

    // Constructor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Metode getRole yang akan dioverride oleh kelas turunan
    public function getRole() {
        return "Peran belum ditentukan.";
    }
}

// Kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nidn; // Encapsulation untuk NIDN

    // Constructor untuk menginisialisasi nama dan NIDN
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Metode untuk mendapatkan NIDN
    public function getNIDN() {
        return $this->nidn;
    }

    // Metode untuk mengubah NIDN
    public function setNIDN($nidn) {
        $this->nidn = $nidn;
    }

    // Override metode getRole untuk Dosen
    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Encapsulation untuk NIM

    // Constructor untuk menginisialisasi nama dan NIM
    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Metode untuk mendapatkan NIM
    public function getNIM() {
        return $this->nim;
    }

    // Metode untuk mengubah NIM
    public function setNIM($nim) {
        $this->nim = $nim;
    }

    // Override metode getRole untuk Mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk pengajuan jurnal, harus diimplementasikan oleh kelas turunan
    abstract public function ajukanJurnal();
}

// Kelas JurnalDosen mengimplementasikan abstraksi
class JurnalDosen extends Jurnal {
    private $nidn;

    public function __construct($judul, $nidn) {
        parent::__construct($judul);
        $this->nidn = $nidn;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Jurnal dengan judul '" . $this->judul . "' diajukan oleh Dosen dengan NIDN " . $this->nidn;
    }
}

// Kelas JurnalMahasiswa mengimplementasikan abstraksi
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($judul, $nim) {
        parent::__construct($judul);
        $this->nim = $nim;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Jurnal dengan judul '" . $this->judul . "' diajukan oleh Mahasiswa dengan NIM " . $this->nim;
    }
}

// Membuat objek Dosen dan Mahasiswa
$dosen = new Dosen("Dr. Budi Santoso", "123456789");
$mahasiswa = new Mahasiswa("Aulia Fitri Nur Azizah", "230102055");

// Menampilkan peran masing-masing
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . "\n";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . "\n";

// Mengajukan Jurnal Dosen
$jurnalDosen = new JurnalDosen("Penelitian AI", $dosen->getNIDN());
echo $jurnalDosen->ajukanJurnal() . "<br>";

// Mengajukan Jurnal Mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Studi Kasus Sistem Informasi", $mahasiswa->getNIM());
echo $jurnalMahasiswa->ajukanJurnal() . "<br>";
