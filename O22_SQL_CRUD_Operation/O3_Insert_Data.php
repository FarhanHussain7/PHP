
<form action="" method="post">
    <input type="text" name="NAME" placeholder="Enter your name"> <br/><br/>
    <input type="number" name="AGE" placeholder="Enter your age"> <br/><br/>
    <input type="text" name="EMAIL" placeholder="Enter your email"> <br/><br/>
    <button>ADD NEW EMPLOYEE</button>
</form>





<?php

    if(isset($_POST['NAME'])){
        $name=$_POST['NAME'];
        $age=$_POST['AGE'];
        $email=$_POST['EMAIL'];

    include('./O1_connection_With_Database.php');

    echo "<br/>";

    try{
    $InsertData = $conn->prepare("INSERT INTO EMPLOYEE (id, name, age, email) values (null, '$name', '$age', '$email')");

    $result = $InsertData->execute();

    If($result){
        echo "Data Inserted succesfully";
    }else{
        echo "Not inserted";
    }
}catch (PDOException $e){
    echo "Error ".$e->getMessage();
}

    }




?>