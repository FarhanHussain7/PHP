
<!-- When user enter our website then we try to save his name and user data so we can use it in future
    - It will save data on browser not on server 
    - it will help to know when user access our site last time 
    - 
    
    setcookie(name, value, expire, path, domain, secure, httponly) 
    
    -->

<?php

// $fruit="Apple";

setcookie("fruit","apple",time()+(86400)); // to see this cookie on browser go inspect mode>application>cookie>http//localhost/php
setcookie("color","green",time()+(86400)); // to see this cookie on browser go inspect mode>application>cookie>http//localhost/php


if(isset($_COOKIE['fruit'])){
// print_r($_COOKIE);
    echo "Current cookie is ".$_COOKIE['fruit'];
}else{
    echo "No cookie is set ";
}


if(isset($_COOKIE['color'])){
// print_r($_COOKIE);
    echo "<H1 style='color:green'>Current cookie is </H1> ".$_COOKIE['color'];
}else{
    echo "No color is set ";
}

?>