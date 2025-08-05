<?php
// Directly calling of function in other function is avoided becase of infinite loop deadlock condition 

function PrintTable(){
    for($j=1; $j<11; $j++){
        echo "2 X $j = ".$j*($j+1);
        echo "$j <br/> ";
    }
}

function InsideFunction(){
    echo "Before Function ..... <br/>";
    PrintTable();
    echo "After Function .......<br/>";
}


InsideFunction();


?>