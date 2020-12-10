
<?php 
	session_start();
error_reporting(0);
	if (!$_SESSION['yes_login']) {
		 ?>
		 <div style="font-size: 50px;text-align: center;text-decoration: none; text-transform: uppercase; color: red;">
		 
		
			<script>
			 
			  
			  location.replace("login.php")
			
			</script>
			

		
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
		
	
	
	
	
	
 ?>

<html>

<head>

  <title>Albums</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="homejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">
<div class="htext01">MUSIC </div>


<div style="text-align: right;text-decoration: none;"><h4>Hello,  <?php echo $_SESSION['name']; ?> (<a href="logout.php">Logout</a>)</h4></div>

	
	<div class="scrollmenu">
  <a href="userdashboard.php">Home</a>
  <a href="#news">Playlist</a>
  <a href="#contact">Artists</a>
  <a href="album.php">Albums</a>
 
</div>  
 <br><br>
	<?php
		$result2 = $dbh->prepare("SELECT * FROM tbl_album ");
		//$_SESSION['email']
		$result2->execute();
		for($i=0; $row = $result2->fetch(); $i++){
	
		$id = $row['album_id'];
		$name = $row['album_name'];
		$artist = $row['album_artist'];
		$genre = $row['album_genre'];
		$year = $row['album_year'];
		$pic = $row['album_pic'];
		
	    ?>
		
		<div class="albumresult" >
		
		
			
			
			
			
			<div class="column" >
			
			<?php 
                
             
			?>
			
				<a><b>Album Name:</b> </a> <?php echo "$name<br />"; ?>
			<a><b>Artist:</b> </a> <?php echo "$artist<br />"; ?>
			<a><b>Genre:</b> </a> <?php echo "$genre<br />"; ?>
			<a><b>Year:</b> </a> <?php echo "$year<br />"; ?>
			
			<form name="editPerson" action="song.php" method="POST">
            <input type="hidden" name="aid" value="<?php echo $id; ?>">
            <input class="form02" type="submit" name="editer" value="Get Songs">
            </form>
			
			
			  </div>
			  <div class="column" >
				<img src="<?php echo "$pic"; ?>" style="width:200px;height:200px;">
				
				
			 </div>
			
			
		
		
	</div>
	
	
	
	
	
	
	<?php
		}
		
		$dbh = null;
	?>

</div>



</body>
</html>