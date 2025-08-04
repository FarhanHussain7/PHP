
<?php

$marks=28;

if($marks>90){
    echo "<H1 style='color:green'> You are First in class</H1>";
}elseif ($marks>80){
    echo "<H1 style='color:pink'>You are second in class</H1>";
}elseif ($marks>70){
    echo "<H1 style='color:blue'>You are third in class</H1>";
}elseif ($marks>60){
    echo "<H1 style='color:yellow'>You are fourth in class</H1>";
}elseif ($marks>33){
    echo "<H1 style='color:orange'>You are pass</H1>";
}else{
    echo "<H1 style='color:red'>You are Failed in class</H1>";
}


$name="Farhan";
if($name="Farhan"){
    echo "<H1 style='color:green'> Hello $name Hussain </H1>";
}elseif ($name=="Farhan Hussain") {
    echo "<H1 style='color:gray'> full name is here $name Hussain </H1>";
}
else{
    echo "<H1 style='color:red, border:2px solid'> Name didn't match </H1>";
}
?>