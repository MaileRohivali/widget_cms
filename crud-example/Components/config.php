<?php 
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "topsikmuhv";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
			die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
	}

	$editmode = true;
	?>