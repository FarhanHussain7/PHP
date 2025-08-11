<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter your name ">
        <br/>
        <br/>
        <button name="button" value="set">Set Cookie</button>
        <br/>
        <br/>
        <button name="button" value="Display"> Display Cookie</button>
        <br/>
        <br/>
        <button name="button" value="delete">Delete Cookie</button>
    </form>
</body>
</html>

<?php

    if(isset($_POST['button'])){
        if($_POST['button']=='set'){
            $val = $_POST['user'];
            setcookie("user",$val);
            echo "Cookie is set ";
        }
        if($_POST['button']=="Display"){
            if(isset($_COOKIE['user'])){
                echo $_COOKIE['user'];
            }
        }

        if($_POST['button']=="delete"){
            if(isset($_COOKIE['user'])){
            setcookie("user",null,-1);
            }
        }
    }
?>
