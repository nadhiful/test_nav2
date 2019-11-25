<?php 
include_once 'config.php';

if (isset($_POST['update'])) {

	$id = $_POST['id'];

	$logname = $_POST['logname'];
	$loguname = $_POST['loguname'];
	$logpass = $_POST['logpass'];

	echo $id;
	// $result = mysqli_query($mysqli,
	// 	"UPDATE login SET logname ='$logname',loguname='$loguname', logpass='$logpass' WHERE id=$id"
	// 	);
	// echo "User already updated";
	// header("Location: index.php");
}

?>
