<?php
require_once ('../db/dbhelper.php');

$username = $password = $email = '';

if (!empty($_POST)) {
	$username = getPOST('username');
	$password = getPOST('password');
	$email    = getPOST('email');

	if ($username != '' && $password != '' && $email != '') {
		//save user into database
		$password = getPwdSecurity($password);

		$sql = "insert into bt2276_users (username, password, email) values ('$username', '$password', '$email')";
		// echo $sql;//SQL Injection
		execute($sql);

		//chuyen sang trang login.php
		header('Location: login.php');
		die();
	}
}