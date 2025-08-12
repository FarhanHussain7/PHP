<?php
$path="C:/xampp/htdocs/PHP/O16_File_CRUD_Operation";
$Items=scandir($path);
// print_r($Items);
$Items = array_diff($Items,array(".","."));
foreach ($Items as $value) {
    echo "<a href='./$value'>$value</a>";
    echo "<br/>";

}

?>

<a href="./demo.txt">demo</a>
