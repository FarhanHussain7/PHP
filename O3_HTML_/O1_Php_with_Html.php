<!-- Php - it will handle the server and database part also 
    html - it will handle the frontend with static ui -->


    <!-- First way  -->
<?php

    echo "<H1 style='color:green'>Helloe my name is Farhan </H1>";
    echo "<H3 style='color:blue'>I am From Delhi </H3>";

?>

<!-- Second way  -->
<?php
    $name="Farhan hussian";
    echo "<h1 style='color:yellow'>My name is $name</h1>"
?>

<!-- Third way  -->
<H1 style='color:red'>
    Hello how are you !
    <?php

    echo "$name : Im fine ";
    ?>
</H1>




<!-- Fourth way  -->
<?php

$colorHead="orange";

?>
<H2 style='color:<?php echo $colorHead ; ?>' ><?php echo "This is different method " ;?> </H2>
<H2 style='color:<?php echo $colorHead ; ?>' ><?php echo "Single variable change many place "; ?> </H2>
<H2 style='color:<?php echo $colorHead ; ?>' ><?php echo "This is different way of using color "; ?> </H2>


    <!-- C:\xampp\htdocs\PHP\O3_HTML_\O1_Php_with_Html.php -->




