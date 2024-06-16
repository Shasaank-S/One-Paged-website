<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'test');

	// initialize variables
	$name = "";
	$features = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$features = $_POST['features'];  
		mysqli_query($db, "INSERT INTO info (name, features) VALUES ('$name', '$features')"); 
		$_SESSION['message'] = "Features saved"; 
		header('location: app.php');
	}

// ...
    if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$features = $_POST['features'];

		mysqli_query($db, "UPDATE info SET name='$name', features='$features' WHERE id=$id");
		$_SESSION['message'] = "Features updated!"; 
		header('location: app.php');
	}

    if (isset($_GET['del'])) {
		$id = $_GET['del']; 
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$_SESSION['message'] = "Features deleted!"; 
		header('location: app.php');
	}
?>