<?php
	include 'connection.php';
	$query = "SELECT * FROM chat WHERE id = 0";
	//$query = "SELECT * FROM chat WHERE name='asd' OR name='sdf' ";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
?>
<div id="message">
	<img class="message-avatar" src="images/mypic.png" alt="">
	
	<a class="message-author" href="#"> <?php echo $row['myname'];?> </a></br>
	<font style="color:black">user: </font><a class="message-author" href="#" ><?php echo $row['name'];?> </a>
	<span class="message-date"> <?php echo formatDate($row['date']);?> </span>
	<span class="message-content">Message: <?php echo $row['message'];?> </span>
</div>
<?php endwhile; ?>