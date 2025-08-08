<?php
// include("./Example-File.php");

for ($i=0; $i <10 ; $i++) { 
//    include("./Example-File.php"); 
   include_once("./Example-File.php"); // It will load only single time no matter It is in loop or not  
}
?>