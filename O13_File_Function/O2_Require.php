<?php
// it file is not exist then it will give warning 
include("./Example-File.php");

// it will also provide the file but if there is no file then it will give fetal error 
require("./Example-File.php");


for ($i=0; $i <10 ; $i++) {
   require_once("./Example-File.php"); // It will load only single time no matter It is in loop or not  
}
?>