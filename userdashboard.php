
<?php 
	session_start();
error_reporting(0);
	if (!$_SESSION['yes_login']) {
		 ?>
		 <div style="font-size: 50px;text-align: center;text-decoration: none; text-transform: uppercase; color: red;">
		 
		<?php die('Access Denied!');?>
		</div>
		<?php
		

	}
	
	    $user = 'root';
        $pass = 'root';


		try {
			$dbh = new PDO('mysql:host=localhost;dbname=cse391', $user, $pass);
			
			
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		$email=$_SESSION['email'];
		
		$result = $dbh->prepare("SELECT name FROM user WHERE email='" . $email ."'");
		
		$result->execute();
		$row = $result->fetch();
		$name = $row['name'];
		$_SESSION['name'] = $name;
	
	
 ?>

<html>

<head>

  <title>User Dashboard</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="homejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">

<script type="text/javascript">
	  
	  var image1 = new Image ()
	  image1.src = "image1.jpg"
	  
	  var image2 = new Image ()
	  image2.src = "image2.jpg"
	  
	  var image3 = new Image ()
	  image3.src = "image3.jpg"
	  
	  var image4 = new Image ()
	  image4.src = "image4.jpg"
	  
	  
	  
	  
	  
</script>

<div class="htext01">MUSIC </div>


<div style="text-align: right;text-decoration: none;"><h4>Hello,  <?php echo $_SESSION['name']; ?> (<a href="logout.php">Logout</a>)</h4></div>

	
	<div class="scrollmenu">
  <a href="userdashboard.php">Home</a>
  <a href="#news">Playlist</a>
  <a href="#contact">Artists</a>
  <a href="album.php">Albums</a>
  
  
</div>  
	
<br>
<br>

<img src="image1.jpg" name="slide" class ="slideshow">
		<script type="text/javascript" >
		var imgNumber = 1
		function myslide(){
		document.images.slide.src = eval("image"+imgNumber+".src")
		if (imgNumber <4)
		imgNumber = imgNumber + 1
		else
		imgNumber = 1
		setTimeout("myslide()",2500)
		}
		myslide()
		
		</script>

</div>

<?php
		
		
		$dbh = null;
	?>

</body>
</html>