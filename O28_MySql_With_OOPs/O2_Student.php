<?php

include("./O1_Connection.php");
class Student{
    public $DBconn;
    function __construct($conn){
        $this->DBconn=$conn;
    }

    function GetData(){
        $getEmp=$this->DBconn->prepare('SELECT * FROM EMPLOYEE');
        $getEmp->execute();
        $result=$getEmp->fetchAll();
        echo "<pre>";
        echo print_r($result);
        echo "</pre>";
    }
}

$Employe = new Student($conn);
$Employe->GetData();

?>