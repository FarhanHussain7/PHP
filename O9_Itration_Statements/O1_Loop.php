<?php

for ($i=1; $i <=10 ; $i++) { 
    echo "$i : hello ji kya hal chal <br/>";
    if($i==5){
        continue;
    }elseif ($i==8) {
        break;
    }
}

for($table=2; $table <=10; $table++){
for($j=1; $j <=10; $j++){
    echo "$table X $j = ".$table*$j;
    echo "<br/>";
}
echo "Next Table <br/> <br/>";
}


$Array=["Hello ", "Sir ", "How ", "Are ", "You" ];

foreach($Array as $x ){
    echo $x;
    echo "<br/>";
}
?>