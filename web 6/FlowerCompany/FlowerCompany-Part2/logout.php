<?php
	session_start();
	unset($_SESSION["UserName"]);
	unset($_SESSION["UserId"]);
	$url = "index.php";
	if(isset($_GET["session_expired"])) {
		$url .= "?session_expired=" . $_GET["session_expired"];
	}
	header("Location:$url");
?>