<?php

// Template that defines methods for a child classes. 
// In Abstract class, we declare methods but write implementation in child class 
// It will help to identify which function are must be used in child class
// Note : we never create object of abstract class.

    abstract class ProductFeatures{
        abstract function productDetails();
        abstract function productImages();
        abstract function productOwnerDetails();

        public $ProductYear="<br/> Product lounch in 2025";

        // We can also create full function 
        function CommanFeatures(){
            echo " Security : Safety : Styling : Advance <br/> ";
        }
    } 

    class UploadProduct extends ProductFeatures{

        function productDetails(){
            echo "Product Name : Mobile Phone (IPhone 16 )  <br/>";
        }

        function productImages(){
            echo "Product Image : Image 1 <br/>";
        }

        function productOwnerDetails(){
            echo "Product Owner : Apple  <br/>";
        }


        // we can also create other function  

        function ProductPrice($Price){
            echo "Price : $Price";
        }

    }


    $Upload = new UploadProduct;
    $Upload->productDetails();
    $Upload->productImages();
    $Upload->productOwnerDetails();
    // You can call that abstract class function
    $Upload->CommanFeatures();

    $Upload->ProductPrice(70000);
   echo $Upload->ProductYear;
?>