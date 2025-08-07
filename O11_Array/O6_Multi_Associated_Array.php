<?php

$Array=[[
    "name"=>"Farhan ",
    "email"=>"fh@gmail.com ",
    "age"=>"24 ",
    "city"=>"delhi ",
    "phonw"=>884839393 ,
    "collage"=>"Hi Tech ", 
],
[
    "name"=>"Rajveer Ranghuvansi  ",
    "email"=>"rj@gmail.com ",
    "age"=>"1124 ",
    "city"=>"avadh ",
    "phonw"=>880009393 ,
    "collage"=>"tech zone sector 4 ", 
],
[
    "name"=>"Furkan kalander  ",
    "email"=>"kalender@gmail.com ",
    "age"=>"11 ",
    "city"=>"old delhi ",
    "phonw"=>9888989923,
    "collage"=>"metero station ", 
],
[
    "name"=>"nikul bhaviya joshi ",
    "email"=>"joshi@gmail.com ",
    "age"=>"20 ",
    "city"=>"kolkata",
    "phonw"=>884839393 ,
    "collage"=>"Hech lal", 
]
];


foreach($Array as $value){

    foreach($value as $key => $items){
        echo "$key is $items";
        echo "<br/>";
    }

    echo "<br/>";
}
?>
