<?php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    
    public function tampilkanDosen() {
        return "Nama: $this->nama, NIP: $this->nip, Mata Kuliah: $this->mataKuliah";
    }
}
$dosen1 = new Dosen("Aulia Fitri Nur Azizah","230102055", "Kewarganegaraan");
echo $dosen1->tampilkanDosen();