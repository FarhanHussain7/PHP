<?php
// print_r($_FILES['fileUpload']);

if($_FILES['fileUpload']){
    $path = $_FILES['fileUpload']['name'];
    $UploadFile_path = "./Upload/".$path;
// echo $UploadFile_path;
// move_uploaded_file will upload this file into your folders
   if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $UploadFile_path) || die("Field didn't Upload")){
    echo "File uploaded Succesfully";
   }else{
    echo "File Didn't upload";
   }

}else{
    die("no file found");
}

// Note : If error is "Denied Permission " in browser then you have to go to terminal and do this 
// 1 first way -  chmod ~R 0777 /<Folder path>O14_Super_Global_Variables/Upload
// if first way didn't work then use this
// 2 second way - sudo  chmod ~R 0777 /<Folder path>O14_Super_Global_Variables/Upload
?>