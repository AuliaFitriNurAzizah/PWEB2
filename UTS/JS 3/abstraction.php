<?php
// Kelas abstrak Course
abstract class Course {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $courseName;
    private $duration;
    private $platform;

    // Constructor untuk menginisialisasi atribut
    public function __construct($courseName, $duration, $platform) {
        $this->courseName = $courseName;
        $this->duration = $duration;
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails
    public function getCourseDetails() {
        return "Online Course: $this->courseName, Duration: $this->duration, Platform: $this->platform";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $courseName;
    private $duration;
    private $location;

    // Constructor untuk menginisialisasi atribut
    public function __construct($courseName, $duration, $location) {
        $this->courseName = $courseName;
        $this->duration = $duration;
        $this->location = $location;
    }

    // Implementasi metode getCourseDetails
    public function getCourseDetails() {
        return "Offline Course: $this->courseName, Duration: $this->duration, Location: $this->location";
    }
}

// Instansiasi objek dari kelas OnlineCourse
$onlineCourse = new OnlineCourse("Web Development", "3 months", "Udemy");
echo $onlineCourse->getCourseDetails() . "\n"; // Menampilkan detail course online

// Instansiasi objek dari kelas OfflineCourse
$offlineCourse = new OfflineCourse("Data Science", "6 months", "Cilacap");
echo $offlineCourse->getCourseDetails(); // Menampilkan detail course offline
?>
