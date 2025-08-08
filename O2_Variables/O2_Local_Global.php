<?php

$name="farhan";
function getName(){
        $localName="Hussain";
        $name="Farhan Hussain";
    echo "Local variable : 1 - ".$localName;
    echo "Local Variable : 2 - ".$name;

    global $name;
    echo "global Variable : 3 - ".$name;



}
// Can't access the Local variable beacuse it is inside the function 
// echo "Local var : ".$localName;
echo "Global var : 4 - ".$name;
getName();

?>
