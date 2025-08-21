<?php

//  It is special type function because it will call by itself after declring the object 
//  It is alway have same name <__construct> 
//  It is mainly used for connection, setting value 

    class ConstructorDemo{
        public $name;
        // Static Data  
        // function __construct(){
        //     echo "__Construct Call  ";
        //     $this->name=" Farhan hussain";
        // }
        

        // Dynamic Data 
        function __construct($name){
            echo "__Construct Call  ";
            $this->name=$name;
        }

       function setName(){
            echo "Hello sir  ".$this->name;

        }
    }

    // $cd = new ConstructorDemo();
    $cd = new ConstructorDemo("Kaif ");

    $cd->setName();


?>