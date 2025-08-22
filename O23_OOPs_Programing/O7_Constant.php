<?php

    class Constant{
// It is can't be accessed direclty 
        const collegeName="Hi Tech";

        // It will only used inside this class
       private const Name="Sanskar college";

        // Protected varibles can access by child class

        function getConstantName(){
            echo self::collegeName;
            echo self::Name;
        }
    }

    // You can call Constant property without making any Object
    echo Constant::collegeName;
    echo "<br/>";

    // Private constant doesn't access outside the class
    // echo Constant::Name;

    $Co = new Constant();

    echo "<br/>";

    $Co->getConstantName();
?>