<?php 
include_once 'config.php';
$result = mysqli_query($mysqli, "SELECT * from login ORDER BY loguname ASC" );
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homeage</title>
</head>
<body>
	<a href="add.php" "email me">Add User</a>
	<a href="login.php" "email me">Login User</a>
</body>

<table>
	<thead>
		<tr>
			<th>Username</th>
			<th>Surename</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while ($user_data =mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$user_data['loguname']."</td>";
				echo "<td>".$user_data['logname']."</td>";
				echo "<td>".$user_data['logpass']."</td>";
				echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='hapus.php?id=$user_data[id]'>Hapus</a></td>";
			}

		 ?>
	</tbody>
</table>
</html>