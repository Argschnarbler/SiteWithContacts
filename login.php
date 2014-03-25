<!-- File: index.php Author: Jacob Meikle Website: Assignment2 File Desc: This is the entire single page desktop site. --> 

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
		$alert= ' <script type="text/javascript"> alert("Access Denied: username/password incorrect"); </script> ';	
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
	$loginHtml =
	'
	<br/>
	<div class="row">
	<div id="loginBox" class="large-6 large-offset-1  medium-8 medium-offset-1  small-10  small-offset-1 columns">
	<form action="'.$_SERVER['PHP_SELF'].'" method="post" name="surveyForm">
	<label for="username">Username</label>
	<input type="text" name="username" />
	<br/>
	<label for="pass">Password</label>
	<input type="password" name="pass" />
	<br/>
	<input type="submit" value="Login" />
	</form>
	</div>
	
	</div>

	';
	
}

	//close db connection
	$db->close();
?>

<!doctype html>
<html class="no-js" lang="en">
  	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Jacob Meikle | Portfolio</title>
	    <link rel="stylesheet" href="css/foundation.css" />
	    <link rel="stylesheet" href="css/custom.css" />
	    <script src="js/jquery.js"></script>    
	    <!-- custom fonts -->
	    <link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
  	</head>
 	<body>
 		<?php 	
 		echo $loginHtml; 	
 		echo $alert;
 		?>
	</body>
</html>

