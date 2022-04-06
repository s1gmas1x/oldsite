<?php

if (isset($_POST['login-submit'])){
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	$user = sanitizeString( $_POST[ 'userlog' ] );
  $pass =  $_POST[ 'passlog' ] ;
	

	
	if(emptyInputLogin($user, $pass) !==false) {
		header("location: ../index.php?error=emptyinput");
		exit();
	}
	
	loginUser($conn, $user, $pass);
}
else {
	header("location: ../index.php");
		exit();
}
