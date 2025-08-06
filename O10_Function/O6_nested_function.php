<!-- 
 -->

 <?php
    function test1(){
        echo "This is functon test 1 <br/>";
        function test2(){
            echo "This is function test 2 <br/>";
        }
    }
// In nested function first call the parent function then run child function 
    test1();

    test2();



    //  you can also call it like this
    // test1();
    // function test1(){
    //     echo "This is functon test 1 <br/>";
    //     function test2(){
    //         echo "This is function test 2 <br/>";
    //     }
    //     // test2();
    // }


 ?>