<?php

	$con = new mysqli('localhost', 'root', '', 'crudtesting');

	/*if(!$con) echo "Connetion Succes...";
	else die(mysqli_error($con));*/

	if(!$con) die(mysqli_error($con));


?>