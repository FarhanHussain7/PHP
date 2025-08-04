<?php
$x=10;
echo "Before Go to Statement <br/>";
if($x==10){
    goto jump;
}

$name="Farhan Hussian";

echo $name;

jump:
echo "After Go to Condition ";


for($g=0; $g<=10; $g++){
    echo "$g : This is before of Go to <br/> ";

    if($g==4){
        goto Skip;
    }
}

Skip:
echo "Loop Ended here"

?>