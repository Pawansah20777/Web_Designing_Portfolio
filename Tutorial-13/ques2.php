<?php

class Student {
  public $name,$grades;
 

  public function getAverageGrade() {
    $total = 0;
    foreach($this->grades as $grade) {
      $total += $grade;
    }
    return $total / count($this->grades);
  }
}

// Create an array of three Student objects
$students = array();

// Create the first Student object
$student1 = new Student();
$student1->name = "kishan";
$student1->grades = array(90, 85, 95);
$students[] = $student1;

// Create the second Student object
$student2 = new Student();
$student2->name = "david";
$student2->grades = array(80, 85, 85);
$students[] = $student2;

// Create the third Student object
$student3 = new Student();
$student3->name = "routledge";
$student3->grades = array(95, 65, 75);
$students[] = $student3;

// Call the getAverageGrade method for each Student object and print the result
foreach($students as $student) {
  echo $student->name . " - Average Grade: " . $student->getAverageGrade() . "<br>";
}

?>
