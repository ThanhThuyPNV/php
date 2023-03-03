<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$dai = $_POST["dai"];
	$rong = $_POST["rong"];
	$dt = $dai * $rong;
	?>
	<form id="forml" name="forml" method="post" action="s_hcn.php">
		<table width="400" border="0" align="center" cellpadding="2" cellpading="2">
			<tr>
				<td colspan="2" align="center"><span class="stylel">Dien tich hinh chu nhat</span></td>
			</tr>
			<tr>
			<td width="125"><span class="style4">Chieu dai: </span></td>
			<td width="161"><label>
				<input name="dai" type="text" id="dai" value="<?php echo $_POST["dai"];?>" site="20" />
			</label></td>
			</tr>
			<tr>
				<td><span class="style4">Chieu rong: </span></td>
				<td><label>
					<input name="rong" type="text" id="rong" value="<?php echo $_POST["rong"];?>" site="20" />
				</label></td>
			</tr>
			<tr>
				<td><span class="style4">Dien tich: </span></td>
				<td><label>
					<input name="dt" type="text" id="dt" value="<?php echo $_POST["dt"];?>" site="20" />
				</label></td>
			</tr>
			<tr>
				<td colspan="2">s:</td>
			</tr>
		</table>
	</form>
</body>
</html>