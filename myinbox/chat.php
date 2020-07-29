<?php


	header('Content-Type: text/html; charset=utf-8');
	include ("../config.php");
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: chat.php");
    exit;
}



	include 'connection.php';
	//$query = "SELECT * FROM chat ORDER BY id DESC";
	$usr = $_SESSION["username"];
	$query = "SELECT * FROM chat WHERE name='$usr' ";
	//$query = "SELECT * FROM chat WHERE name='asd' OR name='sdf' ";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
?>
<div id="message">
	<img class="message-avatar" src="images/mypic.png" alt="logo">
	<a class="message-author" href="#"> <?php echo $row['admin'];?> </a>
	<span class="message-date"> <?php echo formatDate($row['date']);?> </span>
	<span class="message-content"> <?php echo $row['message'];?> </span>
</div>
<?php endwhile; ?>
