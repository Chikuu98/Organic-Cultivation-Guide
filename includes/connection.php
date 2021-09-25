<?php 

	$con = mysqli_connect('localhost', 'root', '', 'final_project');

	// Checking the connection
	if (!$con) {
		die('Database connection failed ' . mysqli_connect_error());
	}

?>