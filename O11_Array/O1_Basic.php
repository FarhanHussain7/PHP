<!-- Array - it is a collection of data 
     - it is three type 
    * Indexed array  
    * Associate arary 
    * Multidimensional -->


<?php

$name = ["Farhan ", "rohit", "jitu", "rajesh"];
echo var_dump($name);
echo "<br/>";

echo $name[0];
echo "<br/>";
echo $name[1];
echo "<br/>";
echo $name[2];
echo "<br/>";

echo count($name);
echo "<br/>";

for ($i=0; $i < count($name) ; $i++) { 
    echo $name[$i];
    echo "<br/>";
}

?>