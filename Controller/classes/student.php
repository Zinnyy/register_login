<?php
class Student extends Database
{
    public $surname;
    public $first_name;
    public $middle_name;
    public $matric_no;
    public $phone_number;
    public $date_of_birth;
    public $gender;
    public $level;

    
    public $doc_table = "student";



    public function validation()
    {
        if (Fun::checkForEmptyInput([$this->surname, $this->first_name, $this->middle_name, $this->matric_no, $this->phone_number, $this->date_of_birth, $this->gender, $this->level])) {
            Fun::redirect("../view/student.php", "err", "None of this field must be empty");
            exit;
        }
        Fun::redirect("../view/student.php", "success", "Successfully saved");
    }
    public function processStudentInfo($surname, $first_name, $middle_name, $matric_no, $phone_number, $date_of_birth, $gender, $level)
    {

        $this->surname = $surname;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->matric_no = $matric_no;
        $this->phone_number = $phone_number;
        $this->date_of_birth = $date_of_birth;
        $this->gender = $gender;
        $this->level = $level;
        $this->validation();
        $this->saveStudentInfo();
    }

    //Save Student info to database
    public function saveStudentInfo()
    {


        return $this->save($this->doc_table, "surname = '$this->surname', first_name = '$this->first_name', middle_name = '$this->middle_name', matric_no = '$this->matric_no', phone = '$this->phone_number', date_of_birth = '$this->date_of_birth', gender = '$this->gender', level = '$this->level'");
    }
}
