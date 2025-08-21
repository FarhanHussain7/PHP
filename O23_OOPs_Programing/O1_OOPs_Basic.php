<?php
// First letter must be 
// property like variables
// function are methods

// class 
    class MathOperation{

        function Add(){
            echo 10+20;
        }

        function Sum($a, $b){
            echo $a+$b;
        }


        function Multi($a, $b){
            echo $a*$b;
        }

    }

// Object - 
    $math = new MathOperation();
    $math->Add();
    echo "<br/>";
    $math->Add();
    echo "<br/>";
    $math->Sum(200, 400);
    echo "<br/>";
    $math->Sum(44, 55);
    echo "<br/>";


// New Object - 
    $math1 = new MathOperation();
    $math1->Sum(300,200);
    echo "<br/>";
    $math1->Multi(22, 4);

?>