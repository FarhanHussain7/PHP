<!-- Access modifiers decides where we can access the methods and properties 
 
    Access Zone : 
        - Access inside the current class only
        - Access everywhere
        - Access in inherited class
        
    Type of access modifiers 
        - Private 
        - Public 
        - Protected 
        
    -->


    <?php

    class Teacher{

        private function questionPaper(){
            return "Important";
        }

        public function exam(){
            if($this->questionPaper()=="Important"){
                echo "Start Practising right now";
            }else{
                echo "Read all Topics";
            }
        }

        protected function studentMarks(){
            echo "Student Marks are good";
        }

    }

    class Management extends Teacher{

        function reviewExam(){
            $this->studentMarks();
        }
    }

    $Obj = new Teacher();

    
    // This is private function so it will only call inside the function 
    // $Obj->questionPaper();

    $Obj->exam();

echo "<br/>";
    $ChildObj = new Management();
    $ChildObj->reviewExam();


?>