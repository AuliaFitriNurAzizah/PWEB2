<?php
// Definisi kelas Dosen
class Dosen {
    // Properti kelas untuk menyimpan nama, NIP, dan mata kuliah
    public $nama;
    public $nip;
    public $mataKuliah;

    // Konstruktor untuk menginisialisasi objek dosen dengan nama, NIP, dan mata kuliah
    public function __construct($nama, $nip, $mataKuliah) {
        // Menetapkan nilai parameter ke properti kelas
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    
    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        // Mengembalikan string yang berisi informasi dosen
        return "Nama: $this->nama, NIP: $this->nip, Mata Kuliah: $this->mataKuliah";
    }
}

// Instansiasi objek dari kelas Dosen dengan memberikan nilai nama, NIP, dan mata kuliah
$dosen1 = new Dosen("Aulia Fitri Nur Azizah", "230102055", "Kewarganegaraan");

// Menampilkan informasi dosen dengan memanggil metode tampilkanDosen
echo $dosen1->tampilkanDosen();
?>
