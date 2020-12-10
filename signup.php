<?php 
	session_start();


	
	if (!empty($_POST['submit2'])) {
		# code...
		include 'connection.php';
		$sql = "INSERT INTO user VALUES(null,'" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["password"] . "','" . $_POST["phone"] . "')";
		
		$result=$db->query($sql);

		
		if ($result) {
			echo "<script type='text/javascript'>alert('Thank You. Account Created Successfully!')</script>";
			echo '<script>window.location.href = "login.php";</script>';
		}else{
			echo "<script type='text/javascript'>alert('Error: Please try again.')</script>";
		}
	}
 ?>
 


<html>
<head>
<title>Sign up</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
   <div class="bgcentre">
	<div class="head01">Create New Account</div>
		<form action="" method="POST">
			 <input class="form01" type="text" name="name" value="" placeholder="Name:" required><br>
			 <input class="form01" type="email" name="email" value="" placeholder="Email:"required><br>
			 <input class="form01" type="password" name="password" value="" placeholder="Password:"required></textarea><br>
			 <input class="form01" type="text" name="phone" value=""placeholder="Phone:" required><br>

			<input class="form02"type="submit" name="submit2" value="Submit"/></center> <br><br>
			
			<a style="font-size: 19px; text-decoration: none; font-family:Arial; font-weight:bold;">Already have an account</a>
	        <br><br>
			<a class="head02" href="login.php">Login</a>
			
			
			</div>
</body>


</html>