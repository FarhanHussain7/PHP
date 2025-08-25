<?php
function autoloader($class){
    echo "<br/>"; 
    echo $class.".php";
    echo "<br/>";
    include($class.'.php');
}
spl_autoload_register('autoloader');

$T = new O1_Teacher();
$S = new O2_Student();
$M = new O3_Management();

?>