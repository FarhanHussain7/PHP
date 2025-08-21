<?php

class UserAuth{

    function Login($userType){
            echo "$userType Login In";
        }
}
 
class Student extends UserAuth{
        
    function Name($Name){
            echo "$Name is from class 2";
        }
    }

    $s = new Student();
    $s->Login("Student");
    echo "<br/>";
    $s->Name("Farhan Hussain");
    echo "<br/>";

    class Teacher extends UserAuth{
    
    function GetSkills(){
            echo "DSA Skills";
        }
    }

    $t = new Teacher();
    $t->Login("Teacher");
    echo "<br/>";
    $t->GetSkills();
?>