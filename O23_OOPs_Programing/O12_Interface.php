<!-- Differnece Between Interface and Abstract class 
  * Interface cannot have properties        |  * While Abstract classes can.
  * All Interface methods must be public    |  * while abstract class methods methods are public or protected 
  * All methods in an interface are         |
    abstract so they cannot be implemented  | 
    in code and abstract keyword in not     |   
    necessary. -->                          

<?php
// Interface tell what methods a class should implements 
// Interface is "implements " in another class 
// In Interface If you create declare multiple function then you have to implement those function in child class otherwise you get an error
// It is used to decalare what kind of fetures we need in our product so they declare in interface earlier 

    
    interface ProductFeatures{
        function productDetails();
        function productImages();
        function productOwnerDetails();

        // Not Allowed in Interface 
        // function CommanFeatures(){
        //     echo " Security : Safety : Styling : Advance <br/> ";
        // }
    } 

    class UploadProduct implements ProductFeatures{

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
    
    $Upload->ProductPrice(70000);




?>