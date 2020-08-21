<?php
	include 'connection.php';
	

		header('Content-Type: text/html; charset=utf-8');
	include ("../config.php");
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: action.php");
    exit;
}

?>
<?php
 $myname;
				$us = $_SESSION["username"]; 
				$query = "SELECT name FROM   users WHERE  username = '$us' ";
				if ($result = mysqli_query($link,$query)) {
					
				/* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
					$myname= $row["name"];
							}

				mysqli_free_result($result);}
	
		if(isset($_POST['submit'])){
			$name = $_SESSION["username"];
			$message = $_POST['message'];
			$query = "INSERT INTO chat (name,myname,message) VALUES ('$name','$myname','$message')";
			$run = $con -> query($query);

			if($run){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
			
				<?php
					header("Location:index.php");
			}
		}
	?>

				
  