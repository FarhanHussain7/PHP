<?php

include("./O1_connection_With_Database.php");

echo "<br/>";


$Employee = $conn->prepare("SELECT * FROM EMPLOYEE");

$Employee->execute();

$result = $Employee->fetchAll();

echo "<table border='1'>";
foreach($result as $Emp){
    echo 
    "<tr>
    <td>". $Emp['NAME'] . "</td>
    <td>". $Emp['AGE']  . "</td>
    <td>". $Emp['EMAIL']. "</td>
    <td>
        <form method='post'>
            <button name=delete value=".$Emp['id'].">Delete</button>
        </form>
    </td>
    <td>
    <a href='O6_Update_Data.php?id=".$Emp['id']."'>edit</a>
    </td>
    
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){

$id=$_POST['delete'];
  echo "<br/>";
$DeleteData = $conn->prepare("DELETE FROM EMPLOYEE WHERE id = '$id' ");

 if($DeleteData->execute()){
    echo "Employee Deleted Succesfully";
 }else{
    echo "Emplpye not deleted";
 }

}

?>