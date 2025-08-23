<?php
//  Namespcae - they allow for better organizaton by grouping classses that work together to perform a task.
//            - they allow the same name to be used for more than one class. 

include('./O1_Teacher.php');
include('./O2_Student.php');

$Teacher = new Teacher\JoiningDetails;
$Teacher->JoiningDate();
echo "<br/>";
$Student = new Student\JoiningDetails;
$Student->ApplicationDate();
?>