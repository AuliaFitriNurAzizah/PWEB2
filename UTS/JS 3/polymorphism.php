<?php
// Kelas Person
class Person {
    protected $name;

    // Constructor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return "Nama: " . $this->name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    private $studentID;

    // Constructor untuk menginisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari kelas induk
        $this->studentID = $studentID;
    }

    // Override metode getName()
    public function getName() {
        return "Mahasiswa: " . $this->name . " (NIM: $this->studentID)";
    }
}

// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    private $teacherID;

    // Constructor untuk menginisialisasi nama dan teacherID
    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil constructor dari kelas induk
        $this->teacherID = $teacherID;
    }

    // Override metode getName()
    public function getName() {
        return "Dosen: " . $this->name . " (ID Dosen: $this->teacherID)";
    }
}

// Instansiasi objek dari kelas Student
$student = new Student("Aulia Fitri Nur Azizah", "230102055");
echo $student->getName() . "\n"; // Menampilkan nama mahasiswa

// Instansiasi objek dari kelas Teacher
$teacher = new Teacher("Dr. Budi Santoso", "T123");
echo $teacher->getName(); // Menampilkan nama dosen
?>
