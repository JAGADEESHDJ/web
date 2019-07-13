<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY TABLE</title>
	<style>
		
		#container{
			position:relative;
			text-align: 40px;
			border-radius: 13px 0px;
			border: 2px solid #333;
			background-color: #bae4f4;
			width:40%;


		}
		#user{
			border-radius: 13px 0px ;
			font-weight:bold;
			
			color:white;
			background:#41a5cc
		}
		#com{
			border-radius:20px;
			width:30%;
			color:red;

			
		}
	</style>
</head>
<body>
<h1>COMMENTS</h1>
<?php

include('db.php');

$sqlget = "SELECT * FROM feedback";
$sqldata = mysqli_query($conn,$sqlget) or die('error in getting');


while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	
	echo "<div id='container'>";

	echo "<div id='user'>";
	
	echo $row['username'];
	echo "</div>";
	echo "<div id='com'>";

	echo $row['comment'];
	echo "</div>";
	echo "</div>";
	echo "<br>";
	

}







?>

</body>
</html>