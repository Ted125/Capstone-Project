<?php
  require_once("../Models/furnitureCRUD.php");
  ob_start();
  session_start();

  $furn = new furniture();
  $verify = $furn->banFurniture($_POST['furnitureId']);
  //echo $_POST['userId'];
  if($verify != null){
    header('Location: '.$_SERVER['HTTP_REFERER']);
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Ban failed";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
