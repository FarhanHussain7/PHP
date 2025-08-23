<?php

if(isset($_POST['user'])){
    class User{
    function GetName($name){
        echo "getting the name of the $name";
    }
}

$user = new User;
$user->GetName($_POST['user']);

}

?>

<form action="" method='post'> 
    <input type="text" placeholder="Enter your name"  name="user">
    <br/>
    <br/>
    <button>Click</button>
</form>