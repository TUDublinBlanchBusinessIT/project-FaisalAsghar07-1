<?php
include_once("config.php");
if(isset($_POST['update']))
$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
    // update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: form.php");
    exit();
?>