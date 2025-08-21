<?php

    class Properties{
        // Property
        public $name="Farhan hussain  ";
    
        function GetName(){
            echo $this->name;
        }
        
        function UpdateName($Changename){
            // $this->name="Kaif Hussain";
            $this->name=$Changename;
        }
    }

    $p1 = new Properties();
    // echo $p1->name;

    $p1->GetName();
    $p1->UpdateName("Jihan Khan");
    $p1->GetName();


?>