<?php 
include 'config.php';
if (isset($_REQUEST['dis']) && isset($_REQUEST['id'])) {
	$statusid = htmlspecialchars(trim($_REQUEST['id']));
	$action = htmlspecialchars(trim($_REQUEST['dis']));
	if ($action == "1") {
		$updatestatus = "UPDATE websitefile SET disable = '$action' WHERE id = '$statusid';";
		$run_query = mysqli_query($connect, $updatestatus);
		header('Location: filedetails.php');
	}
	else{
		$updatestatus = "UPDATE websitefile SET disable = '$action' WHERE id = '$statusid';";
		$run_query = mysqli_query($connect, $updatestatus);
		header('Location: filedetails.php');
	}
}
?>