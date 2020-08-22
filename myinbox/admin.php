<?php
	include 'connection.php';
	// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ='../adminlogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script >
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;	
				}
			}
			req.open('GET','achat.php',true);
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>
</head>
<body onload="ajax();">

	<h2 align="center" style="border-bottom: 1px solid grey;"> ADMIN PAGE</h2>
	<h1 align="center">Hi,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to admin panel.</h1>
	<div class="ibox-content">
        <div class="row">
            <div style="margin-left: 10%;" class=" col-md-10">
                <div class="chat-discussion">
                    <div class="chat-message left">
                        <div id="chat"></div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div style="background-color:white;" class="row">
     	<div style="margin-left: 20%;" class="col-md-8">
		<h3>rerply to :</h3>
			<form method="POST" action="admin.php">
				<div></div>
				<input type="text" name="idval" placeholder="User" required=""/>
				<textarea name="message" placeholder="Solution" required=""></textarea>
				    
				<input type="submit" style="color: white;" name="submit" value="Send it"/>
			</form>
				
		</div>
	
	</div>
	
	<div class="footer">
	Developed by : <a href="admin.php">KRISHI UNNAYAN TEAM</a>
	<button align= "center" type="button" onclick="location.href='adminlogout.php';" style="width:150px;height:100px;background-color:tomato"> লগ আউট</button> 
	</div>
	<?php
		if(isset($_POST['submit'])){
			$name = $_POST['idval'];
			$message = $_POST['message'];
			$admin = $_SESSION['username'];
			$id=1;
			$query = "INSERT INTO chat (id,name, message,admin) VALUES ('$id','$name','$message','$admin')";
			$query2 = "UPDATE chat SET id = 1 WHERE name = '$name'";
			$run2 = $con -> query($query2);
			$run = $con -> query($query);

			if($run){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
				<?php
			}
			if($run2){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
				<?php
			}
		}
	?>
</body>

</html>