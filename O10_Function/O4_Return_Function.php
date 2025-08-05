<?php

function UserName(){
    echo "Print the Return Type Function ......<br/>";
    return "Farhan Hussain";
    }
// Function Calling : Return value doesn't print in this case 
UserName();

// Proper Representation 
echo "Now it will print the Name <br/>". UserName();
echo "<h2>Yes it is Return Type <br/>". UserName()."</h2>";


// ------------------------------------------------------------
function PrintStyle($name, $color){
    return "<h1 style='color: $color'> Name : $name </h1>";
    
    }

    echo "<H1 style='color:blue' >Here Is the Value ... <Br/>". PrintStyle("Farhan Hussain","green"). "</H1>";


?>
