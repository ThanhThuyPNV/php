<?php
require_once ('../db/dbhelper.php');

$sql      = "select * from bt2276_users";
$userList = executeResult($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Users Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Users Page</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>User Name</th>
							<th>Email</th>
							<th style="width: 50px;"></th>
							<th style="width: 50px;"></th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $count = 0;
                        foreach ($userList as $item) {
                            echo '<tr>
                                    <td>'.(++$count).'</td>
                                    <td>'.$item['username'].'</td>
                                    <td>'.$item['email'].'</td>
                                    <td><button class="btn btn-warning">Edit</button></td>
                                    <td><button class="btn btn-danger" onclick="deleteUsers(\''.$item['username'].'\')">Delete</button></td>
                                </tr>';
                        }
                        ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript">
	function deleteUsers(username) {
		option = confirm('Are you sure to delete this user?')
		if(!option) return

		$.post('form-delete.php', {
			'username': username
		}, function(data) {//callback -> khi du lieu dc tra ve tu server
			location.reload() //load website -> khong load cung dc -> su dung jquery de update data -> tuy vao nghiep cua du an.
		})
	}
</script>
</body>
</html>