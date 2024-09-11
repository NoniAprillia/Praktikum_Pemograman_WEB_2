<?php
class  Person {
    protected $name;

    public function __construct($name) {
    $this->name = $name;
    }

    public function getName() {
    return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

$student = new Student("Noni Aprillia", "230102040");
echo $student->getName() . " has Student ID " . $student->getStudentID() . "<br>";
$student->setName("Katrina Dewi");
$student->setStudentID("230302010");
echo $student->getName() . " has Student ID " . $student->getStudentID();
?>