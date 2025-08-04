<?php

$age=21;

if($age>18 and $age<50){
    echo "Okay you can go <br/>";
}else{
    echo "You will not go <br/>";
}

$marks=45;
if($marks>33 || $marks<100){
    echo "you passsed <br/>";
}else{
    echo "you failed <br/>";
}

if($age!=18){
    echo " under age <br/>";
}
?>