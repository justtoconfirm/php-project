<?php
// Start the session
session_start();

// Input field values are empty unless user enters a value
$emailInput = '';

// Error messages - empty by default
$emailErr = '';

// Click 'Register' button
if (isset($_POST['Register'])) {

	// Form validation
	// Check if the email input field is empty
	if (empty($_POST['e_mail'])) {
		$emailErr = "Email is required";
	} else {
		// Populate email input field
		$emailInput = ($_POST['e_mail']);

		// Check the format of the email entered
		if (!filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email entered";
		}
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP Project</title>
</head>
<body>

<form action="" method="post">
	<label for="first_name">First name:</label><br/>
	<input type="text" name="first_name" id="first_name" /><br/>
	<label for="last_name">Last name:</label><br/>
	<input type="text" name="last_name" id="last_name" /><br/>
	<label for="e_mail">Email:</label><br/>
	<input type="text" name="e_mail" id="e_mail" value="<?php echo $emailInput; ?>" /><br/>
	<!-- Error message -->
	<?php echo $emailErr; ?><br/>
	<!-- / Error message -->
	<label for="user_name">Username:</label><br/>
	<input type="text" name="user_name" id="user_name" /><br/>
	<label for="pass_word">Password:</label><br/>
	<input type="password" name="pass_word" id="pass_word" /><br/>
	<br/><button type="submit" name="Register">Create account</button>
</form>

<?php
/*
if (isset($_POST['Register'])) {
	// Set the username entered into the input field as a session
	$_SESSION['s_username'] = $_POST['user_name'];
}
*/

// Output the input entered
// echo "Username: " . $_SESSION['s_username']; 
?>

</body>
</html>