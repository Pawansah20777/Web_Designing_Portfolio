<?php
class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function setAge($newAge) {
    $this->age = $newAge;
  }
}
class Student extends Person {
  public $studentId;

  public function __construct($name, $age, $studentId) {
    parent::__construct($name, $age);
    $this->studentId = $studentId;
  }

  public function setStudentId($newId) {
    $this->studentId = $newId;
  }
}
class Teacher extends Person {
  public $teacherId;

  public function __construct($name, $age, $teacherId) {
    parent::__construct($name, $age);
    $this->teacherId = $teacherId;
  }

  public function setTeacherId($newTeacherId) {
    $this->teacherId = $newTeacherId;
  }
}
$person= new person("pawan",23);
$student= new student("Kumar",24,1234);
$teacher= new teacher("Sah",25,5678);

//call set methods to update properties
$person->setAge(26);
$student->setStudentId(5678);
$teacher->setTeacherId(9012);

//print all objects
echo "Person: {$person->name}, {$person->age}\n";
echo "Student: {$student->name}, {$student->age},{$student->studentId}\n";
echo "Teacher: {$teacher->name}, {$teacher->age},{$teacher->teacherId}\n";
?>
