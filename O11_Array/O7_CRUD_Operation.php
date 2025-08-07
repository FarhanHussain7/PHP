<?php


$name = ["Farhan ", "rohit", "jitu", "rajesh"];

print_r($name);
echo "<br/>";
// Insert in last position 
array_push($name,"gitaa ji");
// Insert Multiple
array_push($name,"Sudhakr","Ginesh","Kajal");


print_r($name);
echo "<br/>";

// Delete from last position : but it will remove only one element from array 
array_pop($name);

print_r($name);
echo "<br/>";

// Delete more than one elements from an array
array_splice($name,-4);
print_r($name);

?>

