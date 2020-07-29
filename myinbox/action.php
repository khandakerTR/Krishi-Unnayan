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
		if(isset($_POST['submit'])){
			$name = $_SESSION["username"];
			$message = $_POST['message'];
			$query = "INSERT INTO chat (name, message) VALUES ('$name','$message')";
			$run = $con -> query($query);

			if($run){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
			
				<?php
					header("Location:index.php");
			}
		}
	?>