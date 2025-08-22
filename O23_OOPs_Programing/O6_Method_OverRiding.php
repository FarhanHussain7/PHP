<?php

class Teacher{
    public $city="Delhi";
    function nextexam(){

            echo "Exam is on Tuesday";
    }

    function age(){
        echo "my age is 40";
    }
}

class Student extends Teacher{
    
    public $city="Noida";

    function age(){
        echo "My Age is 23";
    }
}

$St1 = new Student();
$St1->nextexam();
$St1->age();
echo "<br/>";
echo $St1->city;

?>