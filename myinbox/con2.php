<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "test";
$con = new mysqli($host, $user, $pass, $db_name);
function mydate($date){
	return date('g:i a', strtotime($date));
}
?>