# Pweb2-tugas1
# JOB SHEET 1
# Instruksi Kerja 1
## Pembuatan Class dan Objek

Proyek ini mendemonstrasikan penggunaan kelas sederhana dalam PHP untuk mengelola data mahasiswa (`Mahasiswa`). Kelas `Mahasiswa` memiliki tiga atribut: `nama`, `nim`, dan `jurusan`. Kelas ini juga memiliki metode `tampilkanData()` untuk menampilkan detail mahasiswa.

### Langkah Pembuatan Class dan Objek Mahasiswa
- Membuat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Membuat metode tampilkanData() dalam class Mahasiswa.
-  Melakukan Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.


 **Atribut Kelas**:
  - `nama`: Menyimpan nama mahasiswa.
  - `nim`: Menyimpan nomor induk mahasiswa (NIM).
  - `jurusan`: Menyimpan jurusan atau program studi mahasiswa.

**Metode**:
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

# Instruksi Kerja 2
## Implementasi Constructor

- **Menampilkan data mahasiswa seperti nama, NIM, dan jurusan.**

- **Penggunaan konsep OOP dengan constructor untuk menginisialisasi objek.**


## Struktur Kelas
**Kelas: Mahasiswa**

-**Atribut:**

-`nama`: Menyimpan nama mahasiswa.

-`nim`: Menyimpan NIM mahasiswa.

-`jurusan`: Menyimpan jurusan mahasiswa.

**Metode:**

-**__construct($nama, $nim, $jurusan): Constructor untuk menginisialisasi atribut nama, NIM, dan jurusan.**

-**tampilkanData(): Mengembalikan string yang berisi informasi nama, NIM, dan jurusan mahasiswa.**

## Cara Penggunaan
Instansiasi objek Mahasiswa dengan memberikan nilai `nama`, `NIM`, dan `jurusan`.
Panggil `metode tampilkanData()` untuk menampilkan `data mahasiswa`.
Contoh Kode:

Definisi class mahasiswa
```php
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
```
Pembuatan constructor untuk menginisialisasi atribut
```php
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
```
Pembuatan objek mahasiswa1
```php
// Instansiasi objek dari class Mahasiswa dengan constructor
$mahasiswa1 = new Mahasiswa("Aulia Fitri Nur Azizah", "230102055", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>
```
Berikut ini adalah coding keseluruhan untuk membuat oop dengan penerapan implementasi  construct 

```php
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
```
# Instruksi Kerja 3
**Membuat Metode Tambahan**

- Membuat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan 
perubahan jurusan.

- Menggunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.









