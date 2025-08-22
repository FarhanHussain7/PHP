<?php

    // If we use static keyword then no need to create a object of that class 

    class Honda{
        function CompanyName(){
            echo "Honda";
        }
        
        static function Name(){
            echo "Farhan Hussain : ";
        }

        static public $CountryName="India : ";
    }

    // Calling static method without creating object 
    Honda::Name();
    echo "<br/>";

    echo Honda::$CountryName;


    // Creating Object then calling the method 
    $honda = new Honda;
    $honda->CompanyName();

?>