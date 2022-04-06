<?php //signup.inc.php

if ( isset( $_POST[ "submit" ] ) ) {
  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';
 
  $email = sanitizeString( $_POST[ 'email' ] );
  $user = sanitizeString( $_POST[ 'user' ] );
  $pass =  $_POST[ 'pass' ] ;
  $passConf =  $_POST[ 'passConf' ] ;



	if(emptyInputSignup($email, $user, $pass, $passConf) !==false) {
		header("location: ../registration.php?error=emptyinput");
		exit();
	}
	if(invalidEmail($email) !==false) {
		header("location: ../registration.php?error=invalidemail");
		exit();
	}
	if(invalidUser($user) !==false) {
		header("location: ../registration.php?error=uiderror");
		exit();
	}
	if(passMatch($pass, $passConf) !==false) {
		header("location: ../registration.php?error=pwdmatcherror");
		exit();
	}
	if(userExists($conn, $email, $user) !==false) {
		header("location: ../registration.php?error=emailoruserexsists");
		exit();
	}
	
	
	createUser($conn, $email, $user, $pass);
	

} else {
  header( "location: ../registration.php" );
	exit();
}


