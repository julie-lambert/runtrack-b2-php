<?php 

require_once "class/Student.php";

$student = new Student();
$student1 = new Student(1, 1, "johan@johan.com", "Johan Kress", new Datetime("2013-01-12"), "Male");

var_dump($student, $student1)
?>
