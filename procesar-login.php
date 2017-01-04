<?php
	if ($_POST["inputEmail"]=="admin@example.com") {
		if ($_POST["inputPassword"]=="1234") {
			header("location: home.php");
		}
	} else {
		header("location: login.php");
	}
	

?>