<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">call function </button>
    </form>
</body>
</html>

<?php
if(isset($_POST['button'])){
    btn_call_function();
}
function btn_call_function(){
    echo "Function is call ";
}
?>

<!-- Javascript is well intergrated that's why you can give directly onclike button but in php is doesn't possible becuse it is server 
 side technology  -->

 