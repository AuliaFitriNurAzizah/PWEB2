<?php
// Kelas Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

// Instansiasi objek dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Aulia Fitri Nur Azizah"; // Mengatur nama
$mahasiswa1->nim = "230102055";              // Mengatur NIM
$mahasiswa1->jurusan = "Teknik Informatika"; // Mengatur jurusan

// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>
