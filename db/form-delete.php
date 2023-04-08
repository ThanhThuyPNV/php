<?php
require_once ('../db/dbhelper.php');

$username = '';

if (!empty($_POST)) {
	$username = getPOST('username');

	if ($username != '') {
		$sql = "delete from bt2276_users where username = '$username'";
		execute($sql);
	}
}