<?php

	$db_host = "localhost";
	$db_user = "regionmp_hl";
	$db_password = "m2*AGWYA";
	$db_database = "regionmp_hl";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_database);
	
	if ($mysqli -> connect_error) {
		printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
		exit();
	};

	
?>