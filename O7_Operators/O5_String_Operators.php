<?php
// When we use multiple character then we call it "String "
// String should be double quotes "" 
// To concat to string we use .
// 

$name="Farhan hussain ";

$str='Hi tech ';

echo "Concat two string with .  <br/>";
echo $name.$str;

echo "<br/>";

echo "String variable inside the quotes :  <br/>";
echo "Hello my nam is $name";

echo "<br/>";

echo "String variable outside the quotes : <br/>";
echo "Hello my name is".$name;

echo "<br/>";

echo "String variable not declare in single qutes : <br/>";
echo 'Hello my name is $name';

echo "<br/>";
$str.=$name;

echo $str;

?>