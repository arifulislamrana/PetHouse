<?php
    
    define('ROOT_URL', 'http://localhost/pets/');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '170632');
	define('DB_NAME', 'pets');

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno()){
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }
   