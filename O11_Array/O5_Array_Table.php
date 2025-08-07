<html>
    <head>
        <title>Table</title>
    </head>
    <body>
            <table border="1">
                <tr>
                    <td>S.no</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                </tr>
            </table>

    </body>
</html>

<?php

$Array=[
    [1, "Farhan Hussain", "Farhan@gmail.com", 9737388439],
    [2, "Pawan Kumar", "pawan@gmail.com", 8837378833],
    [3, "Kafka ", "kafak@gmail.com", 33553424255],
    [4, "Maximius ", "maximus@gmail.com ", 9493938992]
];

    echo "<table border='1'>";

    for ($i=0; $i < count($Array) ; $i++) { 
        echo "<tr>";
        for ($j=0; $j < count($Array[$i]); $j++) { 
            echo "<td>";
            echo $Array[$i][$j];
            echo "<br/>";
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";




?>