<?php
	session_start();
	if(!$_SESSION['UserID'])
	{
		header('Location: login.php');
		exit;
	}
	else
	{
		//rertrieve data
		$db = mysqli_connect("localhost","db200193940","63224","db200193940") or die("Error " . mysqli_error($db));
	 
		//Get user id
		$sql = "SELECT * FROM Contacts ORDER BY name";
	
		$result = $db->query($sql);
		
		if($result->num_rows > 0)
		{
			$contactHTML = "<table> <thead> <th> Contacts </th> </thead>";
			
			//iterate through and generate html
			while ($row = $result->fetch_assoc()) {
		        $contactHTML .= '<tr><td onclick=" alert(\' Name: '.$row['Name'].' Phone: '.$row['Phone'].' Address: '.$row['Address'].' \'); ">'.$row['Name'].'</td> </tr>';
		    }
			
			$contactHTML .= "</table>";
		}
		else
		{
			$contactHTML = "nothing found.";
		}
		
	}

?>

<!doctype html>
<!-- File: index.php Author: Jacob Meikle Website: Assignment2 File Desc: This is the entire single page desktop site. --> 
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
 		
 		<div class="row">
 			<a href="logout.php"> Logout </a>
 			<h1> My Contacts</h1> 		
 			
			<div id="loginBox" class="large-6 large-offset-1  medium-8 medium-offset-1  small-10  small-offset-1 columns">
				<?php  echo $contactHTML; ?>
				
			</div>
			
		</div>

	</body>
</html>

