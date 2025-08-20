<?php

include("./O1_connection_With_Database.php");

echo "<br/>";

echo "Update page ::  ";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getInfo = $conn->prepare("SELECT * FROM EMPLOYEE WHERE id = '$id'");
    $getInfo->execute();

    $result = $getInfo->fetchAll();

    $name=$result[0]['NAME'];
    $age=$result[0]['AGE'];
    $email=$result[0]['EMAIL'];


  }
?>

<form method='post'>
  <input type="text" value="<?php echo $name ?> " name="name" />
   <br/><br/>
  <input type="text" value="<?php echo $age ?> " name="age" />
   <br/><br/>
  <input type="text" value="<?php echo $email ?> " name="email" />
   <br/><br/>
  <button value="<?php echo $id;  ?>" name="update">Update Details</button>
</form>


<?php
 if(isset($_POST['update'])){
  $id = $_POST['update'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email=$_POST['email'];
 
$updateEmp = $conn->prepare("UPDATE EMPLOYEE SET
 AGE = '$age',
 NAME = '$name',
 EMAIL = '$email'
 WHERE id = '$id'
 " );

 if($updateEmp->execute()){
  header("location:O5_Delete_Data.php");
 }else{
  echo "Data not updated";
 }
 



}
?>