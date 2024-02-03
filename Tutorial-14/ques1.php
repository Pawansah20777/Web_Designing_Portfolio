<?php
class Person {
  protected $name;
  protected $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function greet() {
    return "Hello, my name is {$this->name} and I am {$this->age} years old.";
  }
}

class Student extends Person {
  private $major;

  public function __construct($name, $age, $major) {
    parent::__construct($name, $age);
    $this->major = $major;
  }

  public function greet() {
    return "Hello, my name is {$this->name}, I am {$this->age} years old and I am majoring in {$this->major}.";
  }
}

// Usage example:
$student = new Student("Pawan", 23, "Computer Engineering");
echo $student->greet(); // outputs: "Hello, my name is Pawan, I am 23 years old and I am majoring in Computer Engineering."
?>
