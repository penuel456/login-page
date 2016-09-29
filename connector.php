<?php
	$sql = mysqli_connect("localhost", "root", "", "world");

	/* Check Connection */
	// mysqli function that displays any error#:
	// mysqli_connect_errno()
	if(!$sql){
		echo "ERROR: Failed to connect to the database";
		exit();
	}

?>