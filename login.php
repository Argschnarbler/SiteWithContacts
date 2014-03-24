<?php
session_start();

//Create Db connection

$db = mysqli_connect("localhost","db200193940","63224","db200193940") or die("Error " . mysqli_error($db));
 
//Handle login post
if($_POST && empty($_SESSION['UserID']))
{
	//Get user id
	$sql = "SELECT userid FROM Admin WHERE username = '".$_POST['username']."' AND password = '".$_POST['pass']."'";

	$result = $db->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_row();

		$_SESSION['UserID'] = $row[0];
	}
	else
	{
		echo' <script type="text/javascript"> alert("Access Denied: username/password incorrect"); </script> ';	
	}
	
}

//Check if user is logged in
if($_SESSION['UserID'])
{
	//redirect to contact page
	header('Location: mycontacts.php');
	exit;
}
else
{
	//display login screen
	echo
	'
	<form action="'.$_SERVER['PHP_SELF'].'" method="post" name="surveyForm">
	<label for="username">Username</label>
	<input type="textbox" name="username" />
	<br/>
	<label for="pass">Password</label>
	<input type="password" name="pass" />
	<br/>
	<input type="submit" value="Login" />
	</form>
	';
	
}
?>
