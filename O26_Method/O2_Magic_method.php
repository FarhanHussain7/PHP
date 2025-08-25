<!-- 1. __construct()
     2. __destruct()
     3. __call()
     4. __callStatic()
     5. __get()
     6. __set()
     7. __isset()
     8. __unset()
     9. __sleep()
     10.__wakeup()
     11.__serialize()
     12.__unserialize()
     13.__toString()
     14.__invoke()
     15.__set_state()
     16.__clone()
     17.__debuginfo()

     they all are call by itself it means no need to call
  -->

  <?php


   class User{

   //1. __invoke = when we call our object as a function then we use invoke
      function __invoke(){
         echo "My Name is Farhan HUssain";
      }
   //2. __get = When we use any private variable or call with wrong name, then it will handle the error 
      public $Name="Farhan Hussain";
      private $age=43;

      function __get($property){
         echo "$property does not exist <br/>";
      }

      //3. __call = When you call non existing varibale or function then the error is handle by __call method.
      function __call($method,$args){
            // echo "$method function is not found <br/> ";
            // print_r($args);
            if(method_exists($this,$method)){
               echo "$method is private function <br/>";
               call_user_func_array([$this,$method],$args);
            }else{
               echo "$method not found";
            }
      }
                     // This is private function so __call will handle it 
                           private function GetMeMyName($name){
                                 echo "$name this is my name";
                              }


      //4. 
   }

   $User = new User;
   // $User->GetName();
   $User();   // __invoke :  Now we can object as function 
   echo "<br/>";

   echo $User->Naam;  // __get : Variable name not same so it will handle the error 
   echo $User->age;  // __get : Private only access inside the class so error handle by get 

   $User->GetMeMyName("Farhan", "Hussain"); // __call method handle this undefine function in class 
?>