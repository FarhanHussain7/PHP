<?php

include("./O1_Connection.php");
echo "<br/>";
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

    function InsertData(){
        $Insert=$this->DBconn->prepare("INSERT INTO EMPLOYEE (id, NAME, AGE, EMAIL) VALUE (null, 'Gitanjali', '33', 'gita@gmail.com')");
         $result = $Insert->execute();

         if($result){
            echo "Data Inserted Sussceful";
         }else {
            echo "Not Inserted";
         }
    }

    function UpdateData(){
        $Update = "UPDATE EMPLOYEE set 
                    NAME='ARMAN TSARUKAN',
                    EMAIL='arman@gmail.com',
                    AGE='30'
                    where id=18";
        $Empl=$this->DBconn->prepare($Update);
        $result=$Empl->execute();

        if($result){
            echo "Data Updated successfully";
        }else {
            echo "Data Not Updated";
        }
    }

    function DeleteData(){
        $Delete="DELETE from EMPLOYEE where id=17 ";
        
        $Empl=$this->DBconn->prepare($Delete);
        $result=$Empl->execute();

        if($result){
            echo "Data Deleted successfully";
        }else {
            echo "Data Not Deleted";
        }
    }
}

$Employe = new Student($conn);
$Employe->GetData();
// $Employe->InsertData();
// $Employe->UpdateData();

    // $Employe->DeleteData();
?>