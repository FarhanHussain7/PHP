<?php
// Return : - It will only stop the own function execution not the other code


$a=10;
$b=20;
echo $a-$b;
echo "<br/>";

echo Test();

echo $a*$b;
echo "<br/>";


echo $a+$b;
echo "<br/>";

echo $a/$b;
echo "<br/>";

function Test(){
    return 90;

}
?>