
<?php

$age=18;

if($age<18){
    echo "<H1 style='color:red' > You are not allowed </H1>";
}else{
    echo "<H1 style='color:green'>You are allowed </H1>";
}

$name="Farhan";
if($name="Farhan"){
    echo "<H1 style='color:green'> Hello $name Hussain </H1>";
}else{
    echo "<H1 style='color:red, border:2px solid'> Name didn't match </H1>";
}
?>