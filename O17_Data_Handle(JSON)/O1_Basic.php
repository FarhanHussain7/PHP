<?php

    $user=["name"=>"farhan Hussain","age"=>24,"email"=>"fh@gmail.com"];
    $userJson=json_encode($user);

    print_r($user);
    echo "<br/>";
    echo $userJson;
    echo "<br/>";

    $data='{"name":"Farhan Hussan", "Age":30, "email":"fh@gmail.com"}';
    $dataArray=json_decode($data,true);
    print_r($dataArray);
    // echo $dataArray;

?>