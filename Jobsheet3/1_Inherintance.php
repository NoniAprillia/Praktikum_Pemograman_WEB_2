<?php
//DEFINISI CLASS
class Person {
    //ATRIBUT
    protected $name;
    //CONSTRUCT 
    public function __construct($name) {
        $this->name=$name;
    }
    //METODE
    public function getName(){
        return $this->name;
    }
}
class Student extends Person {
    //ATRIBUT
    private $studentID;
    //CONSTRUR
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID=$studentID;
    }
    //METODE
    public function getStudentID(){
        return $this->studentID;
    }
}
$Person1 = new Student ("Noni Aprillia", " 230102040 " );
echo $Person1->getName() . '<br>';
echo $Person1->getstudentID() . '<br>';

?>