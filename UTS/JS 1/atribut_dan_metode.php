<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Instansiasi objek, memperbarui jurusan dan NIM
$mahasiswa1 = new Mahasiswa("Aulia Fitri Nur Azizah", "230102055", "Teknik Informatika");
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah jurusan
$mahasiswa1->updateJurusan("Sistem Informasi");
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah NIM
$mahasiswa1->setNim("230102066");
echo $mahasiswa1->tampilkanData();
?>
