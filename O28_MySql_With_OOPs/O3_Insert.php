<?php

    include("O1_Connection.php");
    class Employee{
        public $DBconn;
        function __construct($conn){
            $this->DBconn=$conn;
        }

        function InsertData($request){
            // print_r($request);
            $name=$request['name'];
            $age=$request['age'];
            $email=$request['email'];

            $insert="INSERT INTO EMPLOYEE (id, name, age, email) value (null, '$name', '$age', '$email')";
            $SetData =$this->DBconn->prepare($insert);
            $result = $SetData->execute();

            if($result){
                echo "Data Inserted sussces";
            }else {
                echo "Not Inserted";
            }
        }
    }

    $Employee = new Employee($conn);
    if(isset($_POST['name'])){
        $Employee->InsertData($_POST);
    }
    
?>