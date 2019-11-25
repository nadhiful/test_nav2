<!DOCTYPE html>
<html>
<head>
	<title>Add Username</title>
</head>
<body>
	<a href="index.php">Back to Index</a>
</body>
	<form action="add.php" method="post" accept-charset="utf-8">
	<table>
		<tbody>
			<tr>
				<td>Name</td>
				<td><input type="text" name="logname" value="" placeholder=""></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="loguname" value="" placeholder=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="logpass" value="" placeholder=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</tbody>
	</table>
	</form>


	<?php 

	if (isset($_POST['submit'])) {
		$logname = $_POST['logname'];
		$loguname = $_POST['loguname'];
		$logpass = $_POST['logpass'];
		include_once 'config.php';
		$result = mysqli_query($mysqli,
		"INSERT INTO login(logname,loguname,logpass) VALUES('$logname','$loguname','$logpass')"
		);

		echo "User has been created";

	}


	 ?>

</html>