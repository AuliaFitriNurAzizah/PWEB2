<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama NIM: $this->nim Jurusan: $this->jurusan";
    }
}

// Instansiasi objek tanpa constructor
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Aulia Fitri Nur Azizah <br>";
$mahasiswa1->nim = "230102055 <br>";
$mahasiswa1->jurusan = "Teknik Informatika <br>";

// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>
