<!--It variables are storage location .
    It is abstracted storage location 
    It can store any kind of data 
    ex : name, number, flaot ,
    varaible will be with $ sign 
    there is no need to declare type and they change also 

Rules :- a variable start with the $ sign
         a variable name cannot start with a number 
         a variable name must start with a letter or the underscore(_) character.
         a variable name cannot start with the a special operator 
         a variable can only contains aplha-numeric characters and underscore(_) .
         example :- $name, $Name ,$NAME are three different variables.
         syntax:- $name="FarhanHussain";
     -->
<?php
     $name = "Farhan ";
     $Name = "Farhan Hussain";
     $_age_=22;
echo "Name is $name full name is $Name and my age is $_age_ <br/>";

$num=20;
$a=$b=30;

echo "Value of $a";

echo $num*3;
echo "<br/>";


echo $num+88;
echo "<br/>";


echo $num-8;
echo "<br/>";
     
?>

<!-- C:\xampp\htdocs\PHP\O2_Variables/O1_var.php -->