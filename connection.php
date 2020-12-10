<?php 
$db = new mysqli('localhost','root','root','cse391');

if($db->connect_errno){
		echo "Failed to connect to MySQL: (".$db->connect_errno.") ";
	}
	
 ?>