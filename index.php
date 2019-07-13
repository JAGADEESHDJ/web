<?php
include('nav.php');
?>

<?php
include('server.php');

//if user is not logged in then he cannot access the page
if(empty($_SESSION['username']))
{
		header('location:alogin.php');

}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Tender__1.png" />
	<title>AUTHORITY REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	#authority{
    background-color: #4caff0;
  }
  body{
background-image:linear-gradient(-90deg, cyan , #234);

}


table {
  border-radius: 12px;
  border-collapse: collapse;
 width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:nth-child(odd){background-color: #aaa;}
/*-- footer --*/
.footer{
    font-size: 12px;
    color: #bfbfbf;
    text-align: center;
    line-height: 12px;
}
.footer {
    background: #0b0c11;
  padding:2em 0em;
}
</style>

</head>
<body><center>
	<div class="header">
	<h2>index page</h2>		
	</div>
<div class="content">
	<?php
	if (isset($_SESSION['success']));
	?>
	<div class="error success">
		<h3>
				<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
		</h3>
	</div>



<?php if(isset($_SESSION["username"]));  ?>

<p>WELCOME <STRONG><?php echo $_SESSION["username"]; ?> </STRONG></p>
 
 <p><a href="index.php?logout='1'" style="color:red">logout</a></p>


</div>
<?php

include('db.php');

$sqlget = "SELECT * FROM urequest ";
$sqldata = mysqli_query($conn,$sqlget) or die('error in getting');
echo "<div style='overflow-x:auto;'>";
echo"<table>
<tr><th>TENDER ID</th><th>NAME</th><th>MOBILE</th><th>EMAIL</th><th>NO OF WORKERS</th><th>ADDRESS</th><th>EXPERIENCE</th><th>AMOUNT</th><th>TYPE</th><th>NO OF DAYS</th><th>QUOTATION</th></tr>
";
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
  
  echo"<tr><td>";
  echo $row['tid'];
 echo"</td><td>";
  echo $row['name'];
  echo"</td><td>";
  echo $row['mobile'];
  echo"</td><td>";
  echo $row['email'];

  echo"</td><td>";
  echo $row['nowo'];
  echo"</td><td>";
  echo $row['addr'];
  echo"</td><td>";
  echo $row['expe'];
  echo"</td><td>";
  echo $row['amount'];
  echo"</td><td>";
  echo $row['type'];
  echo"</td><td>";
  echo $row['nod'];
  echo"</td><td>";
  echo $row['quot'];
  echo"</td><td>";
  echo"</td></tr>";


}
echo"<table>";
echo "</div>";
?>

	</center>
  <footer class="footer">
  &copy; 2019 SADJ SOLUTIONS  All copyrights are reserved.
</footer>
</body>
</html>