<?php
require_once ('/db/dbhelper.php');

$username = $password = '';

if (!empty($_POST)) {
	$username = getPOST('username');
	$password = getPOST('password');

	if ($username != '' && $password != '') {
		//save user into database
		$password = getPwdSecurity($password);

		$sql   = "select * from bt2276_users where username = '$username' and password = '$password'";
		$users = executeResult($sql);

		if ($users != null && count($users) > 0) {
			//login successfully
			//chuyen sang trang login.php
			header('Location: users.php');
			die();
		}
	}
}