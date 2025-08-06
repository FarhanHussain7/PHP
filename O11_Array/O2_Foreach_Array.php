<?php

$ArrayVal=["Farhan", "Hussain", "Hi tech", 988333433, true, 89.443];

foreach ($ArrayVal as  $value) {
    echo "<H1 style='color:blue' > The Element of Array : ".$value."</H1>";
    echo "<br/>";

}


foreach ($ArrayVal as  $value) {
    echo "<H1 style='color:green' > The Element of Array : ".$value."</H1>";
    echo "<br/>";
    if($value=="Hi tech"){
        break;
    }
    
}


foreach ($ArrayVal as  $value) {
    echo "<H1 style='color:yellow' > The Element of Array : ".$value."</H1>";
    echo "<br/>";
    if($value=="Hussain"){
        continue;
    }
    
}

?>