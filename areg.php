<?php 
include('nav.php')

?>

<?php 

include('server.php');


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Tender__1.png" />
	<title>AUTHORITY REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
body{
			color:white;

			background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('../images/alogin.png');
		}
	form{
			background:transparent;
		}
		ul{
			background-image:linear-gradient(to right, rgba(25,0,0,0), rgba(20,22,33,1));
		}
		#authority{
  background-color: #4caff0;
 

		}
</style>
</head>
<body>
	<div class="header">
	<h2 align="center">REGISTER</h2>		
	</div>
	<form method="post" action="areg.php">

		<!-- display validation errors here -->
		<?php 
		include('errors.php');

		?>
		<div class="input-group">
			
<label>USERNAME</label>
<input type="text" name="username" value="<?php echo $username ?>" required>

		</div>
		<div class="input-group">
			
<label>EMAIL</label>
<input type="email" name="email" required value="<?php echo $email ?>">

		</div>

<div class="input-group">
			
<label>PASSWORD</label>
<input type="password" name="password_1" required>

		</div>


<div class="input-group">
			
<label>CONFIRM PASSWORD</label>
<input type="password" name="password_2" required>

		</div>


<div class="input-group">
			
<button type="submit" name="register" class="btn">Register</button>

		</div>
		<hr>
<p>Already have an account? <button id="btn" class="btn"><a style="color:white" href="alogin.php" >SIGNIN</a></button></p>
	</form>
</body>
</html>