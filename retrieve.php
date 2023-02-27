<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Data</title>
	
</head>
<body>
	<h1>Restaurant Data</h1>

	<h2>Menu</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image URL</th>
		</tr>
		<?php
        // Connect to the database
		$servername = "db";
		$username = "data2";
		$password = "zack";
		$dbname = "data2";
		$conn = new mysqli($servername, $username, $password, $dbname);
        ?>
		
</body>        