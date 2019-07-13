<?php

session_start();
//header('location:success.php');

$con = mysqli_connect('localhost','root','','etender');
if($con){

}
else
{

  echo"no connection established";
}

mysqli_select_db($con,'etender');
$email=$_POST['email'];
$uname=$_POST['uname'];
$comment=$_POST['comment'];
//$date = date("h:i:sa");

//$q="select * from signin where name ='$email'";

//$result = mysqli_query($con,$q);
//$num=mysqli_num_rows($result);
//if($num!==1)
//{

$qy="insert into feedback(email,username,comment,date) values('$email','$uname','$comment',NOw())";
mysqli_query($con,$qy);


//}
header("refresh:3;url=feedback_form.php");

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Tender__1.png" />
	<title>review of feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><center>
	<div class="header">
	<h2>Review Of Feedback</h2>		
	</div>
<div class="content">

	<div class="error success">
		
		<h3>
				<?php
				echo"name : ".$uname;
				echo"<br>";
				echo"comment  : ".$comment;
				?>
		</h3>

	</div>



 
</div>
	</center>
</body>
</html>
