<?php

// If you put final keyword with class then class doen't inherit by another class

//    final class Honda{
   class Honda{

    // Now no one can make same function with this function name
    final function CarName(){
        echo "Honda Car";
    }
    }

    class Car extends Honda{

        // it will give error because same function name as final function
    // function CarName(){
    //     echo "Honda Car";
    // }
        
    function Car(){
        echo "Toyata";
    }
    }

    $C = new Car;
    $C->CarName();

?>