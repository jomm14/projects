<?php
include 'server.php';

	if(isset($_GET['deleteid'])){
		$id = $_GET['deleteid'];
		$sql = "DELETE FROM users WHERE id = $id";
		$result = mysqli_query($con, $sql);
		if($result) header('location:index.php'); /*echo "You deleted the Account..";*/
		else die(mysqli_error($con));
	}

?>