<?php
// Include config file
require_once "config.php";
 header('Content-Type: text/html; charset=utf-8');
 
$username = ""; $password = ""; $confirm_password = "";
$username_err = "";$password_err =""; $confirm_password_err = "";
 $email =""; $email_err= "";
 $mobile = "";$mobile_err="";

// Processing form data when form is submitted


	if(empty(trim($_POST["mobile"]))){
        $mobile_err = "Please enter Your MObile Num";
    }
    // Validate username
    if(empty(trim($_POST["username"])))
	{
        $username_err = "Please enter a username.";
	}	
	else
	{
		$us = $_POST["username"]; 
		$mob = $_POST["mobile"];
		$database_username="";$database_phone="";
		$flag = 0;
				$query = "SELECT name,phone FROM   users WHERE  username = '$us' AND phone='$mob'";
				if ($result = mysqli_query($link,$query)) {
					echo "found";
				/* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
					
					$database_username = $row["name"];
					$database_phone = $row["phone"];
					$flag = 0;
							}
							echo $flag;

    mysqli_free_result($result);
	
} // Close statement


	echo $database_username ;
	echo $database_phone;
      if((strcmp($database_username,$us)==0)&&(strcmp($database_phone,$mob)==0))
		  header("location: forgetpass.php");

	}
	


  
    
    
   


?>