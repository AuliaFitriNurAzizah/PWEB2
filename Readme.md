# Pweb2-tugas1
# Kelas Mahasiswa dalam PHP

Proyek ini mendemonstrasikan penggunaan kelas sederhana dalam PHP untuk mengelola data mahasiswa (`Mahasiswa`). Kelas `Mahasiswa` memiliki tiga atribut: `nama`, `nim`, dan `jurusan`. Kelas ini juga memiliki metode `tampilkanData()` untuk menampilkan detail mahasiswa.

## Fitur

- **Atribut Kelas**:
  - `nama`: Menyimpan nama mahasiswa.
  - `nim`: Menyimpan nomor induk mahasiswa (NIM).
  - `jurusan`: Menyimpan jurusan atau program studi mahasiswa.

- **Metode**:
  - `tampilkanData()`: Menampilkan nama, NIM, dan jurusan mahasiswa dalam format yang mudah dibaca.

## Penjelasan Kode

Berikut ini adalah penjelasan singkat mengenai kode:

### Definisi Kelas

Kelas `Mahasiswa` didefinisikan dengan tiga atribut publik dan satu metode untuk menampilkan data mahasiswa:

```php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}
```
### Metode yang digunakan untuk menampilkan data dari Mahasiswa
```php
// Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}
```
### Instansiasi dan tampil data dari objek Mahasiswa
```php
// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Aulia Fitri Nur Azizah";
$mahasiswa1->nim = "230102055";
$mahasiswa1->jurusan = "Teknik Informatika";

// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>
```
### Coding secara keseluruhan untuk pembuatan class dan objek mahasiswa
```php
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

// Instansiasi objek tanpa constructor
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Aulia Fitri Nur Azizah";
$mahasiswa1->nim = "230102055";
$mahasiswa1->jurusan = "Teknik Informatika";

// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>
```
![alt text](<class objek.png>)