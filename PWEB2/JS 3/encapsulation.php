<?php
// Kelas Person
class Person {
    private $name;

    // Constructor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter untuk nama
    public function getName() {
        return $this->name;
    }

    // Setter untuk nama
    public function setName($name) {
        $this->name = $name;
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

    // Override metode getName() untuk menampilkan nama dan NIM
    public function getName() {
        return "Mahasiswa: " . parent::getName() . " (NIM: $this->studentID)";
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

    // Override metode getName() untuk menampilkan nama dan ID Dosen
    public function getName() {
        return "Dosen: " . parent::getName() . " (ID Dosen: $this->teacherID)";
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
