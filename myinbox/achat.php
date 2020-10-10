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
	<html>
  <head>

  </head>
  <body>
    <div> <?php
	 $file = $row['file'];
	 $pic= $row['image'];
	 if ($pic==1)
	{
		 $vid=$row['vid'];
	 echo "<div >";
	  echo "<a href='show.php?id=$vid'  target='_blank'>View IMAGE</a>";
 
	 echo "</div>";
	 
	 }?>
	 <?php
	 if ($file=='0')
		 echo " ";
	 else if ($pic==0){
		 $vid=$row['vid'];
	 echo "<div >";
	  echo "<a href='view.php?id=$vid'  target='_blank'>Watch Video</a>";
       //echo "<video src='".$file."' controls width='320px' height='200px' >";
	 echo "</div>";}?>

</div>
<?php endwhile; ?>