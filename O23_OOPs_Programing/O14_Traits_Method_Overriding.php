<?php
    trait ParentCompany1{
        function getEmp(){
            echo "Total EMployee : 2000";
        }
    }

    trait ParentCompany2{
        function getEmp(){
            echo "Total EMployee : 1000";
        }
    }

    class Company{

        use ParentCompany1;
        use ParentCompany2{
            ParentCompany1::getEmp insteadOf ParentCompany2;
            ParentCompany2::getEmp as getEmpCompany2;
        }
        // function getEmp(){
        //     echo "Total EMployee : 500";
        // }
    }

    $c = new Company;
    $c->getEmp();
    echo "<br/>";
    $c->getEmpCompany2();


?>