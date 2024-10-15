<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

// Instansiasi objek dari class Mahasiswa dengan constructor
$mahasiswa1 = new Mahasiswa("Aulia Fitri Nur Azizah", "230102055", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>
