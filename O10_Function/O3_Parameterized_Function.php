<?php

function Table($k){
    echo "Print the table ......<br/>";
    for ($i=1; $i <11 ; $i++) { 
        echo "$k X $i = ". $k*$i;
        echo "<br/>";
    }
}

Table(3);

function Addition($a, $b){
    echo "Print the Sum ......<br/>";
    echo $a+$b;
    echo "<br/>";
    }

Addition(88, 34);


function PrintStyle($name, $color){
    echo "Print the Details  ......<br/>";
    echo "<h1 style='color: $color'> Name : $name </h1>";
    echo "<br/>";
    }

PrintStyle("Farhan","green");

?>
