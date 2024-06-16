<?php  include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
		$n = mysqli_fetch_array($record);
		$name = $n['name'];
		$features = $n['features'];

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="features.css">
</head>
<body>
	<a href="logout.php"><button>logout</button></a>
    <?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

    <?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

    <table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Features</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
		    <tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['features']; ?></td>
				<td>
					<a href="app.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
				</td>
			    <td>
			    	<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
		    	</td>
		    </tr>
	    <?php } ?>
		</tbody>
    </table>

	<form method="post" action="server.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>"> 
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Features</label>
			<input type="text" name="features" value="<?php echo $features; ?>">
		</div>
		<div class="input-group">
		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
		</div>
	</form>
</body>
</html>