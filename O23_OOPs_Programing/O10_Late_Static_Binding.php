<?php

class CountrySale{
    static public $totalSales=1000;
    function getTotalSale(){
        // Useing static keyword 
    echo static::$totalSales;
    }


    static function AreaName(){
        echo " : Delhi";
    }

    function GetAreaName(){
        static::AreaName();
    }
}


class CitySale extends CountrySale{
    static public $totalSales=50;

    
    static function AreaName(){
        echo " : Noida";
    }
}


// It will show child sale
$City = new CitySale;
$City->getTotalSale();
$City->GetAreaName();
echo "<br/>";

// It will show Parent sale
$City1 = new CountrySale;
$City1->getTotalSale();
$City1->GetAreaName();

?>