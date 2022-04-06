<?php //functions.inc.php
function console_log($data) {
	echo '<script>';
	echo 'console.log('. json_encode($data). ')';
	echo '</script>';
}
function sanitizeString( $var ) {
  if ( get_magic_quotes_gpc() )
    $var = stripcslashes( $var );
  $var = strip_tags( $var );
  $var = htmlentities( $var );
  return $var;
}

function sanitizeMySQL( $conn, $var ) {
  $var = $connection->real_escape_string( $var );
  $var = sanitizeString( $var );
  return $var;
}

function emptyInputSignup($email, $user, $pass, $passConf) {
	$result;
	if (empty($email) || empty($user) || empty($pass) || empty($passConf)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}
function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}
function invalidUser($user) {
	$result;
	
	if (!preg_match("/^[a-zA-Z0-9]*$/", $user)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}
function passMatch($pass, $passConf){
	$result;
	
	if ($pass !== $passConf) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
} 
function userExists($conn, $email, $user){
	
	$sql = "SELECT * FROM users WHERE email = ? OR user = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../registration.php?stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "ss", $email, $user);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $user, $pass){
	
	$sql = "INSERT INTO users (email, user, pass) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../registration.php?stmtfailed");
		exit();
	}
	
	$passwordHash = password_hash($pass, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, 'sss', $email, $user, $passwordHash);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../registration.php?error=none");
	exit();
}
function emptyInputLogin($user, $pass) {
	$result;
	if (empty($user) || empty($pass)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $user, $pass) {
	$userExists = userExists($conn, $user, $user);
	
	if ($userExists === false) {
		header("location: ../index.php?error=nouser");
		exit();
	}
	
	$passHash = $userExists['pass'];
	
	$checkPass = password_verify($pass, $passHash);
	
	if ($checkPass === false){
		header("location: ../index.php?error=wrongpass");
		exit();
	}
	else if ($checkPass === true){
		session_start();
		$_SESSION['id'] = $userExists['id'];
		$_SESSION['user'] = $userExists['user'];
		header("location: ../index.php?success");
		exit();
	}
}
