<?php

	require "database.php";

	$name = "Argha Paul";
	$email = "arghapaul100@gmail.com";

	echo "Insert Result: ".INSERT($name, $email);

	echo "Search Result: ".SEARCH($email);

?>