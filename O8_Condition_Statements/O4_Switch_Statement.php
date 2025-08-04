<!-- Used for multiple condition  -->
 <?php

 $color="green";

 switch ($color) {
    case "red":
        echo "<H1 style='color:red'> Color Is red </H1>";
        break;
    case 'green':
        echo "<H1 style='color:green'> Color Is green </H1>";
        break;
    
    case 'blue':
        echo "<H1 style='color:blue'> Color Is blue </H1>";
        break;
    
    case 'yellow':
        echo "<H1 style='color:yellow'> Color Is yellow </H1>";
        break;
    
    case 'voilet':
        echo "<H1 style='color:voilet '> Color Is voilet </H1>";
        break;
    
    default:
        echo "<H1 style='color:gray'> Choose a right color </H1>";
        break;
 }

 ?>