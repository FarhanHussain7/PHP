<!--* set a default value in parameter functoin if it is not provided by user 
    *   -->

<?php
function fruit($name, $color="green"){
    echo "<H1 style='color:$color'>this is $name and its color is  $color </H1>";
}

fruit("Orange",);   //If i will not give the second parameter then it will take default parameter ($color=green)
fruit("apple", "red"); // But if i will give all parameter then it will not take default parameter
?>