<?php
// Include config file
require_once "config.php";
 header('Content-Type: text/html; charset=utf-8');
 
$username = ""; $password = ""; $confirm_password = "";
$username_err = "";$password_err =""; $confirm_password_err = "";
 $email =""; $email_err= "";
 $mobile = "";$mobile_err="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 

	if(empty(trim($_POST["mobile"]))){
        $mobile_err = "Please enter Your MObile Num";
    }
    // Validate username
    if(empty(trim($_POST["username"])))
	{
        $username_err = "Please enter a username.";
		echo $username_err;
    } 
	else
	{
		
		$user=$_POST["username"];
		echo $user;
		$mob=$_POST["mobile"];
		echo $mob;
		$query = "SELECT username,phone FROM users WHERE username = '$user' AND '$mob' ";
			if ($result = mysqli_query($link,$query)) 
			{

				/* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
					printf ("%s\n", $row["username"]);
					printf ("%s\n", $row["phone"]);
							}

					mysqli_free_result($result);
			}
		else
			{
				
             $username_err = "    This Username is not valid";
			 echo $username_err;
            }
    } 

            // Close statement
  
        
    }
    
   


?>