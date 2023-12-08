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
    
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>