<?php
session_start();

if (isset($_POST['submitlogin'])) {
		
	require 'db.script.php';	

	$username = $_POST['uid'];
	$password = $_POST['pwd'];

	if (empty($username) || empty($password)){
		header("Location: ../login.php?error=emptyfields"); // empty fields
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' ;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){ // sql error cannot acces the database
			header("Location: ../login.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			// var_dump($result);die;
			if ($result->num_rows == 1) {
				
				$_SESSION['user_id'] = $result->username;
				header("Location: ../index.php");
				exit();
			} else { // user don't exist
				header("Location: ../login.php?error=wrongpass");
				exit();
			}
		}
	}

} else {
	header("Location: ../login.php"); // force the user to access the index from the login portal
	exit();
}
