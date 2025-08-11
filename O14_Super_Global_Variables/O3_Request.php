<?php
    echo "Request file ...<br/>";

    // print_r($_REQUEST);

    if($_REQUEST){
    foreach($_REQUEST as $key => $data){
        echo $key ." is  ".$data ;
        echo "<br/>";
    }
}
?>