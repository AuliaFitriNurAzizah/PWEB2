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

    // Getter untuk studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName()
    public function getName() {
        return "Mahasiswa: " . $this->name . " (NIM: $this->studentID)";
    }

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter untuk name
    public function getNameEncapsulated() {
        return $this->name;
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

// Mengubah nama dan NIM menggunakan setter
$student->setName("Aulia F. N.");
$student->setStudentID("230102056");

// Menampilkan data mahasiswa setelah perubahan
echo "Setelah perubahan:\n";
echo $student->getName() . "\n"; // Menampilkan nama mahasiswa yang diubah
echo "NIM Baru: " . $student->getStudentID() . "\n"; // Menampilkan NIM baru

// Instansiasi objek dari kelas Teacher
$teacher = new Teacher("Dr. Budi Santoso", "T123");
echo $teacher->getName(); // Menampilkan nama dosen
?>
