<!-- function is a block of code  
    it is used for an specific purpose 
    It can we use multiple time -->
<?php

function PrintMyDetails(){
    echo "My Name is Farhan Hussain";
    echo "<br/>";
    echo "Location : Noida";
    echo "<br/>";
    echo "Email : FarhanHussain@gmail.com  <br/>";
    echo "------------------------------------------<br/>";
}

PrintMyDetails();

// Calling the function with for loop  

for($i=0; $i<4; $i++){
    PrintMyDetails();
}

?>