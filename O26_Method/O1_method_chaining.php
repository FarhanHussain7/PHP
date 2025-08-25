<?php

    class Company{
        function GetName(){
            echo "This is my company name. ";
            return $this;
        }
        function GetEmp(){
            echo  "This is my Employee name ";
            return $this;
        }

        function GetOffice(){
            echo "My Office in Delhi. ";
        }
    }

    $Com = new Company;
    // $Com->GetName();
    $Com->GetName()->GetEmp()->GetOffice();

?>