
<?php
include('nav.php')

?>

<?php
include('server.php')

?>

<!DOCTYPE html>
<html>
<head>
	<title>AUTHORITY REGISTRATION</title>
	<link rel="icon" href="Tender__1.png" />
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
<body><center>
	
	<div class="header">
	<h2>Login</h2>		
	</div>
	<form method="post" action="alogin.php">
		<div class="input-group">
			<!-- display the errors here-->
			<?php 
		include('errors.php');

		?>
<label>USERNAME</label>
<input type="text" name="username" required>

		</div>
		<div class="input-group">
			


<div class="input-group">
			
<label>PASSWORD</label>
<input type="password" name="password" required>

		</div>



<div class="input-group">
			
<button type="submit" name="login" class="btn">Login</button>

		</div>
		<hr>
<p>didn't have an account? <button id="btn" class="btn"><a style="color:white" href="areg.php" >register</a></button></p>
	</form></center>
</body>
</html>