<?php
$a=5;

echo var_dump($a);

$a= (string) $a;
echo var_dump($a);
echo "<br/>";



$a= (boolean) $a;
echo var_dump($a);
echo "<br/>";


$a= (float) $a;
echo var_dump($a);
echo "<br/>";


$a= (double) $a;
echo var_dump($a);
echo "<br/>";


$a= (int) $a;
echo var_dump($a);
echo "<br/>";



$a= (array) $a;
echo var_dump($a);
echo "<br/>";

$f=20;
$f= (object) $f;
echo var_dump($f);
echo "<br/>";
?>