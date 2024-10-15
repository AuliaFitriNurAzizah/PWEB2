<?php
class Mahasiswa {
    // Atribut private
    private $nama;
    private $nim;
    private $jurusan;

    // Metode setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Metode setter untuk NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Metode getter untuk NIM
    public function getNim() {
        return $this->nim;
    }

    // Metode setter untuk jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: " . $this->getNama() . ", NIM: " . $this->getNim() . ", Jurusan: " . $this->getJurusan();
    }
}

// Instansiasi objek dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa();

// Menggunakan setter untuk mengatur nilai atribut
$mahasiswa1->setNama("Aulia Fitri Nur Azizah");
$mahasiswa1->setNim("230102055");
$mahasiswa1->setJurusan("Teknik Informatika");

// Menampilkan data mahasiswa menggunakan metode tampilkanData
echo $mahasiswa1->tampilkanData();
?>
