<?php
// 

class TypeScripting{
    function GetName(Array | string $name){
        echo $name;
    }
}

$Type = new TypeScripting;
$Type->GetName(["Apple"]);


?>