<?php
    // Traits are mechanism to reuse code in a single inheritance language so we use multiple inheritence by traits
    /* Note : PHP is single inheritence(only one parent class is inherit by child ) not a 
    multiple iheritence(multiple parent class inherit by child)  language */

    trait parentCompany1{
        function GetTotalEmp(){
            echo 500;
        }
    }

    trait parentCompany2{
        function GetTotalOfiice(){
            echo 899;
        }
    }

    class Company{

        // we can use multiple parent class in child class by traits 
        use parentCompany1;
        use parentCompany2;

    }

    $Com = new Company;
    $Com->GetTotalEmp();
    echo "<br/>";
    $Com->GetTotalOfiice();
?>