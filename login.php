<?php 

include_once 'config.php';

if (isset($_POST['submit'])) {
$loguname = $_POST['loguname'];
$logpass = $_POST['logpass'];

$result = mysqli_query($mysqli, "SELECT * FROM login WHERE loguname='$loguname' and logpass='$logpass'",);
$cek = mysqli_num_rows($result);
if ($cek > 0) {
	session_start();
	$_SESSION['loguname'] = $loguname;
	header("Location: dashboard.php");
	
} else{
	echo "Password salah";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="login.php" method="post" accept-charset="utf-8">
		<table>
		<tbody>
				<tr>
					<td><input type="text" name="loguname"  placeholder="">Username
					</td>
				</tr>
				<tr>
					<td><input type="text" name="logpass"  placeholder="">Password
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"  placeholder="">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>