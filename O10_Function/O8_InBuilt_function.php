<?php

$str="farhan hussain";

// it will give the Length of the String 
echo strlen($str);
echo "<br/>";

$var= true;

// It will show the data type of variable  
echo var_dump($var);
echo "<br/>";

// Date Function  
// d =  date
// l = day
// m = month
// M = month name 

echo date("d");
echo "<br/>";
echo date("l");
echo "<br/>";
echo date("m");
echo "<br/>";
echo date("M");
echo "<br/>";


// it will give all the details of the php data 
// echo phpinfo();

$var="abc";
// Check this variable is string or not 
echo is_string($var);
echo "<br/>";

// genrate the random number 
echo rand();
echo "<br/>";


echo "Before";
// die();
// exit();
echo "After:";
echo "<br/>";


$string="code for the Php Language";
echo substr($string, 5);
echo "<br/>";
?>