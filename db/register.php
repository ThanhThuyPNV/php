<?php
require_once ('form-user.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Registation Page</h2>
			</div>
			<div class="panel-body">
				<form method="post" id="RegisterForm">
					<div class="form-group">
					  <label for="usr">User Name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="username" pattern="[a-zA-Z0-9]{3,}">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password">
					</div>
					<div class="form-group">
					  <label for="confirmation_pwd">Confirmation Password:</label>
					  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_pwd">
					</div>
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(function() {
		$('#RegisterForm').submit(function() {
			if($('[name=password]').val() != $('[name=confirmation_pwd]').val()) {
				alert('Password is not matching, plz check it again!!!')
				return false;
			}
			return true;
		})
	})
</script>
</body>
</html>