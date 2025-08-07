

<?php

$MultiArray=["Farhan", [67, 89, 88], ["Jitu","Raju","chotu"]];

$Array=[
    [1, "Farhan Hussain", "Farhan@gmail.com", 9737388439],
    [2, "Pawan Kumar", "pawan@gmail.com", 8837378833],
    [3, "Kafka ", "kafak@gmail.com", 33553424255],
    [4, "Maximius ", "maximus@gmail.com ", 9493938992]
];

    echo "<pre/>";
    print_r($Array);

    for ($i=0; $i < count($Array) ; $i++) { 
        for ($j=0; $j < count($Array[$i]); $j++) { 
            echo $Array[$i][$j];
            echo "<br/>";
        }
    }
?>