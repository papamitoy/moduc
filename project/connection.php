<?php
	$link = mysqli_connect("localhost", "root", "", "db_proj");
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>