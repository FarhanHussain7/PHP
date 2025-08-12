
<form method="post" >
    <input type="text" placeholder="enter file name" name="filename">
    <br/>
    <br/>
    <textarea name="content" id=""> 

    </textarea>
    <br/>
    <br/>
    <button>Create File</button>
</form>

<?php

// -------- static data ------------

// $filename="demo.txt";
// $content="This file content save in demo ";

// $file = fopen($filename,"w") or die("unable to create file");
// fwrite($file,$content);
// fclose($file);
// echo "file is created ";



// ---------- Dynamic data --------------
    if(isset($_POST['filename'])){
         $filename=$_POST['filename'];
    $content=$_POST['content'];

    $file = fopen($filename,"w") or die("unable to create file");
    fwrite($file,$content);
    fclose($file);
    echo "file is created ";
      
    }

?>