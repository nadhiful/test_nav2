<?php 
include_once 'config.php';


if (isset($_POST['update'])) {

	$id = $_POST['id'];

	$logname = $_POST['logname'];
	$loguname = $_POST['loguname'];
	$logpass = $_POST['logpass'];

	$result = mysqli_query($mysqli,
		"UPDATE login SET logname ='$logname',loguname='$loguname', logpass='$logpass' WHERE id=$id"
		);
	echo "User already updated";
	header("Location: index.php");
}

?>


<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id' ");

while ($user_data = mysqli_fetch_array($result)) {
	$logname 	= $user_data['logname'];
	$loguname 	= $user_data['loguname'];
	$logpass 	= $user_data['logpass'];
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Username</title>
</head>
<body>
	<a href="index.php">Back to Index</a>
</body>
	<form action="edit.php" method="post" accept-charset="utf-8">
	<table>
		<tbody>
			<tr>
				<td>Name</td>
				<td><input type="text" name="logname" value="<?php echo $logname ?>" placeholder=""></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="loguname" value="<?php echo $loguname ?>" placeholder=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="logpass" value="<?php echo $logpass ?>" placeholder=""></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'] ?>></td>
				<td><input type="submit" name="update" value="Submit"></td>
			</tr>
		</tbody>
	</table>
	</form>

</html>