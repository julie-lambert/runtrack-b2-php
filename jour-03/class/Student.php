<?php

class Student {

    public ?int $id;
    public ?int $grade_id;
    public ?string $email;
    public ?string $fullname;
    public ?Datetime $birthdate;
    public ?string $gender;


    public function __construct($id=null, $grade_id=null, $email=null, $fullname=null, $birthdate=null, $gender=null){

        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        
    }

    


}




?>