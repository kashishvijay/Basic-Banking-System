<?php

	$conn = mysqli_connect('localhost','root','','statebank');

	if(!$conn){
		die("Could not connect due to the error : ".mysqli_connect_error());
	}

?>