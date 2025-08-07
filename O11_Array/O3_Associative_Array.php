<!--* There is no Index of array 
    * They attach with the key  
    * When we have varity of data then we have to used associtive array 
    -->

<?php

$AccociateArray=[
    "name"=>"Farhan ",
    "email"=>"fh@gmail.com ",
    "age"=>"24 ",
    "city"=>"delhi ",
    "phonw"=>884839393 ,
    "collage"=>"Hi Tech ", 
];

echo $AccociateArray["name"];
echo $AccociateArray["age"];
echo $AccociateArray["city"];


    echo "<br/>";

foreach($AccociateArray as $key => $val){
    // echo $key;   // It will print only keys 
    // echo $val;   // it will print only values 

    echo $key. " is ". $val;

    echo "<br/>";
}


?>