<?php 
	session_start();
?>

<html>

<head>

  <title>Login</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="homejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">



<?php 
	


	
	if (!empty($_POST['submit'])) {
		
		include 'connection.php';
		$sql = "SELECT * FROM user WHERE email='" . $_POST["un"] ."' and password = '". $_POST["pw"] . "'";
		$result=$db->query($sql);

		
		if ($row= $result->fetch_assoc()) {
			$_SESSION['yes_login'] = true;
			
			
			$_SESSION['email'] = $_POST['un'];
			?>
			<script>window.location.href = 'userdashboard.php';</script>
			<?php 
			
		}else{
			
			 ?>
			
			<script>
			 
			  alert("Incorrect Email or Password");
			
			</script>
		<?php 	
		}
	}else{
		
	}
 ?>

	<div class="head01">Login</div> <br>
	<form action="" method="POST">
		<input class="form01"type="text" name="un" placeholder="Email" required /><br>
		<input class="form01"type="password" name="pw" placeholder="Password" required /><br>
		<input class="form02" type="submit" name="submit"/>
		
		
	</form>
	
	
	<a style="font-size: 19px; text-decoration: none; font-family:Arial; font-weight:bold;">If you don't have an account</a>
	<br><br>
	<a class="head02" href="signup.php">Sign Up</a>
	


</div>
</body>
</html>