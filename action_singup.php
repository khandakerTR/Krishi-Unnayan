<?php
// Include config file
require_once "config.php";
 header('Content-Type: text/html; charset=utf-8');
 
// Define variables and initialize with empty values
$username = ""; $password = ""; $confirm_password = "";
$username_err = "";$password_err =""; $confirm_password_err = "";
$name = "" ; $name_err = "";
$vill ="" ; $vill_err = "";
$div = "";$div_err = "";
$dist = ""; $dist_err = "";
$thana= "";$thana_err="";
$posto = "";$posto_err="";
$mobile = "";$mobile_err="";
$jomi = "" ;$jomi_err = "" ;
$item = "";$item_err = "";
$email =""; $email_err= "";
 

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	if(empty(trim($_POST["name"]))){
        $name_err = "Please enter Your NAME";
		
    }
	if(empty(trim($_POST["vill"]))){
        $vill_err = "Please enter Your village";
    }
	if(empty(trim($_POST["div"]))){
        $div_err = "Please enter Your division";
    }
	if(empty(trim($_POST["dist"]))){
        $dist_err = "Please enter Your disttirct";
	}
	if(empty(trim($_POST["thana"]))){
        $thana_err = "Please enter Your thana";
    }
	if(empty(trim($_POST["posto"]))){
        $posto_err = "Please enter Your Post office";
    }
	if(empty(trim($_POST["mobile"]))){
        $mobile_err = "Please enter Your MObile Num";
    }


	
	
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 3){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
		
	/*	
		$sql2 = "INSERT INTO registration (username, name,village,division,district,thana,post,phone,jomi,item,eamil) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		 if($stmt = mysqli_prepare($link, $sql2))
			mysqli_stmt_bind_param($stmt, "ssssssssdss ", $pusername, $pname,$pvillage,$pdivision,$pdistrict,$pthana,$ppost,$pphone,$pjomi,$pitem,$peamil);
			$pusername=$username;
			$pname=$name;
			$pvillage=$vill;
			$pdivision=$div;
			$pdistrict=$dist;
			$pthana=$thana;
			$ppost=$posto;
			$pphone=$mobile;
			$pjomi=$jomi;
			$pitem=$item;
			$peamil=$email;
		
		
		*/
		
		
		
		
		
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,name,village,division,district,thana,post,phone,jomi,item,eamil) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssdss", $param_username, $param_password,$pname,$pvillage,$pdivision,$pdistrict,$pthana,$ppost,$pphone,$pjomi,$pitem,$peamil);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			$pname=$_POST["name"];
			$pvillage=$_POST["vill"];
			$pdivision=$_POST["div"];
			$pdistrict=$_POST["dist"];
			$pthana=$_POST["thana"];
			$ppost=$_POST["posto"];
			$pphone=$_POST["mobile"];
			$pjomi=$_POST["jomi"];
			$pitem=$_POST["item"];
			$peamil=$_POST["email"];
			
			
			
			
			
			
            
            // Attempt to execute the prepared statement
            if((mysqli_stmt_execute($stmt) )){
				 
			//$sql = "INSERT INTO registration (username, name,village,division,district,thana,post,phone,jomi,item,eamil) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		 
		 /*if($stmt = mysqli_prepare($link, $sql))
			mysqli_stmt_bind_param($stmt, "ssssssssdss", $pusername, $pname,$pvillage,$pdivision,$pdistrict,$pthana,$ppost,$pphone,$pjomi,$pitem,$peamil);
			
			$pusername=$username;
			$pname="tushar";
			$pvillage=$vill;
			$pdivision=$div;
			$pdistrict="ঢাকা";
			$pthana=$thana;
			$ppost=$posto;
			$pphone=$mobile;
			$pjomi=$jomi;
			$pitem=$item;
			$peamil=$email;
			if (mysqli_stmt_execute($stmt) )*/
                // Redirect to login page
               header("location: index.php");
			
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>