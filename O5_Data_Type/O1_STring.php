<!-- there are 8 type of data type in php 
    1. String - 
    2. Integer
    3. float
    4. Boolean
    5. Null
    6. Array
    7. Objects(class)
    8. Recourse - store the data base connection, and lib
    
    there is no such data type "char" in php 
-->

<?php

$name="Criemssy";
echo "This is String Example $name : ";
echo var_dump($name);  //it will used to find type and length 
echo"<br/>";


// Integer 
$num=10;
echo var_dump($num);
echo"<br/>";


// Flaot
$floatNum=10.23;
echo var_dump($floatNum);
echo"<br/>";



// Boolean
$bool=true;
echo var_dump($bool);
echo"<br/>";


// Array
$ArrayValue=["anil", "Sam", "Umesh", 56, 34.778, true];
echo var_dump($ArrayValue);
echo"<br/>";


// null 
$empty=null;
echo var_dump($empty);


// object
// subect s = new class;

// rescouce

$connection= ftp_connect("127.0.0.1") or die(" local host not found ");
echo var_dump($connection);
?>

