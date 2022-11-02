<?php 
require("../model/database.php");
require("../Controller/common/function.php");
require("../Controller/classes/student.php");
$student = new Student;


if($_POST['student_btn']){
    $student->processStudentInfo($_POST['surname'],$_POST['first_name'],$_POST['middle_name'],$_POST['matric_no'],$_POST['phone'],$_POST['date_of_birth'],$_POST['radio'],$_POST['level']);
}
