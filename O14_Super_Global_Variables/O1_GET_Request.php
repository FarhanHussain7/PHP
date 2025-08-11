<?php
    if($_GET){
echo "hello Sir, <br/>";
echo "Your name is ".$_GET['user_name']." and your password is".$_GET['password'];
    }else{
        echo "No data is field ";
    }
?>
