<?php
//require('Models/Database.php');
session_start();
mkdir('C:/xampp/htdocs/Capstone-Project/Resources/Images/Users/'.$_SESSION['userId'].'');
$uploaddir = 'C:/xampp/htdocs/Capstone-Project/Resources/Images/Users/'.$_SESSION['userId'].'/';
$fileExtension = '.jpg';
//$uploadfile = $uploaddir . basename('dummyname') . $fileExtension;
$uploadfile = $uploaddir . basename($_SESSION['userId']) . $fileExtension;    //image naame will be the id of user

if (move_uploaded_file($_FILES['newData']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";

  $_POST['newData'] = 'Resources/Images/Profile/Users/'.$_SESSION['userId'].'/'. basename($_SESSION['userId']) . $fileExtension;

  echo "FIELD: ".$_POST['field'];
  echo "NEWDATA: ".$_POST['newData']; 
  require_once("../Models/userDetails.php");

  $user = new user_details();
  $verify = $user->updateUser($_POST['field'], $_POST['newData']);
  $_SESSION[$_POST['field']] = $_POST['newData'];
 //  if($verify == true){
 //    $_SESSION[$_POST['field']] = $_POST['newData'];

 //  } else {
 //        //inform user that the input is not valid
 //   echo "Invalid credentials or not activated";
 // }

} else {
   echo "Upload failed";
   echo $uploadfile;
}

//header( "Location: http://localhost/capstone-project/profile.php" );
?> 