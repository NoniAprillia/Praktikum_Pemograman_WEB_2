<?php
class Person {
    public $name; 
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Setter for name
    public function setName($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    private $studentID; // Encapsulated attribute

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getName() {
        return "Student: " . parent::getName();
    }

    public function getStudentID() {
        return $this->studentID;
    }

    
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

class Teacher extends Person {
    private $teacherID; // Encapsulated attribute

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName() {
        return "Teacher: " . parent::getName();
    }

    public function getTeacherID() {
        return $this->teacherID;
    }

    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }
}


$student = new Student("Alva Rezal", "230102039");
$teacher = new Teacher("Meilita Ayu", "230102038");
$student = new Student("Probo Widado", "230102041");
echo $student->getName() . " with Student ID " . $student->getStudentID() . "<br>"; 
echo $teacher->getName() . " with Teacher ID " . $teacher->getTeacherID() . "<br>";
echo $student->getName() . " with Teacher ID " . $teacher->getTeacherID() . "<br>";
?>