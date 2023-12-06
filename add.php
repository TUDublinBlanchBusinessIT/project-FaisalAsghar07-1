<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Users</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container mt-5">
		<a href="index.php" class="btn btn-primary">Go to Home</a>
		<br/><br/>

		<form action="add.php" method="post" name="form1">
        <div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="mobile">Mobile</label>
				<input type="text" class="form-control" id="mobile" name="mobile" required>
			</div>
			<button type="submit" class="btn btn-success" name="Submit">Add</button>
		</form>
		
		<?php
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			
			// include database connection file
			include_once("config.php");
					
			// Insert user data into table
			$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
			
			// Show message when user added
			echo "<p class='mt-3 alert alert-success'>User added successfully. <a href='index.php'>View Users</a></p>";
		}
		?>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
