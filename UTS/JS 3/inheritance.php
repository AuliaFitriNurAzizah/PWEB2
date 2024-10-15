<?php
// Kelas Person
class Person {
    // Atribut
    protected $name;

    // Constructor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut tambahan
    private $studentID;

    // Constructor untuk menginisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        // Memanggil constructor kelas induk (Person)
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Contoh penggunaan
// Membuat objek dari kelas Student
$student1 = new Student("Aulia Fitri Nur Azizah", "230102055");

// Menampilkan nama dan studentID
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID();
?>
