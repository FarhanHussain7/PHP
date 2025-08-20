<form method='post'>
    <input type="text" placeholder="Serach here" name="search">
    <button>search</button>

</form>


<?php
    include("./O1_connection_With_Database.php");

echo "<br/>";

    if(isset($_POST['search'])){
        $search = $_POST['search'];
        // $emp = $conn->prepare("SELECT * FROM EMPLOYEE WHERE NAME = '$search'");
        $emp = $conn->prepare("SELECT * FROM EMPLOYEE WHERE NAME like '%$search%'");
        $emp->execute();

        $result = $emp->fetchAll();

        // print_r($result);

        echo "<table border='1'>";
echo "<tr><th>Name</th><th> AGE </th><th>Email</th></tr>";
foreach ($result as $student) {
    echo "<tr>
    <td>" . $student['NAME'] . "</td>
    <td>" . $student['AGE'] . "</td>
    <td>" . $student['EMAIL'] . "</td>
    </tr>";
}
echo "</table>";

    }


?>