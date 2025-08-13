<?php

    $user=["anil", "peter", "sam","jitu","ramesh"];


    if(is_array($user)){
        echo "This is an array";
    
    }else{
        echo "this is not an array";
    }

    echo "<br/>";
    // 1-- it will give Count of array 
    echo count($user);

    // 2-- It will remove the element between the array without disturbing others

    echo "<br/>";
    unset($user[3]);
    print_r($user);

    // 3-- it will add new element in the last of the array
echo "<br/>";
    array_push($user, "sunil");
    print_r($user);

    // 4-- It will remove the element from the last 
echo "<br/>";
    array_pop($user);
    print_r($user);

echo "<br/>";


$keys=["name"=>"Farhan", "age"=>30, "email"=>"fh@gmail.com"];

// 5-- It will only give the keys of the array 
    print_r(array_keys($keys));

echo "<br/>";


// 6-- It will convert the Array into String 
echo implode($user);
echo "<br/>";

// 7-- It will convert the STring into Array 
$str ="Hello my frined how was your journy";

print_r(explode(" ",$str));
echo "<br/>";
print_r(explode("e",$str));
echo "<br/>";
print_r(explode("o",$str));
echo "<br/>";


// 8-- Merge Two Array 

print_r(array_merge($user,$keys));
echo "<br/>";


// 9-- Removing the duplicate element from array 

$duplicate=["gita", "sita", "rita", "kita", "gita", "sita", "soni", "moni", "soni"];
$data=array_unique($duplicate);
print_r($data);
echo "<br/>";




?>