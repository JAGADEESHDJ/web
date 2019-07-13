<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
<link rel="icon" href="Tender__1.png" />
  
<style>
ul {
  list-style-type: none;
  margin-left:1px;
  margin:1px;
  padding:1px;
  overflow: hidden;
  background-image:linear-gradient(to right, rgba(25,0,0,0), rgba(20,22,33,1));
}

#head{
position:absolute;
top:-12px;
left:110px;
z-index:1;
color:white;
font-size:20px;
width:50%;
}

li {
  width: 10%;
  float:right;
}
#img1{
  position:absolute;
  width:5px;
  top:5px;
  left: 50px;
}

li a {
  
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  border-radius: 15px;
}

li a:hover:not(.active) {
  background-color: #4caff0;
}
body{
background-image:linear-gradient(-90deg, cyan , #234);

}

.active {
  background-color: #4caff0;

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
/*#main-head{
font-size: 3em;
  align:right;
  color:#f4f4f4;

}*/
</style>
<body>
<div id="head"><h2 id="main-head">e-Tender Management</h2></div>
<div id="img1">
  <img src="Tender__1.png" height="50px">
</div>
<div id="list-div"><ul>
  
  <li><a  href="areg.php">AUTHORITY</a></li>

  <li><a  href="request_tender.php">REQUEST</a></li>
  <li><a href="tplogin_form.html">PUBLISHER</a></li>
  <li><a href="feedback_form.php">FEEDBACK</a></li>
  <li><a  href="tend_home.html">HOME</a></li>
</ul></div>

<br>

<br>


<?php

include('db.php');

$sqlget = "SELECT * FROM publish";
$sqldata = mysqli_query($conn,$sqlget) or die('error in getting');
echo "<div style='overflow-x:auto;'>";
echo"<table>
<tr><th>TENDER ID</th><th>MOBILE</th><th>EMAIL</th><th>LOCATION</th><th>STATE</th><th>AMOUNT</th><th>CLOSE-DATE</th><th>TYPE</th><th>DESCRIPTION</th></tr>
";
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
  
  echo"<tr><td>";
  echo $row['tid'];
 echo"</td><td>";
  echo $row['mobile'];
  echo"</td><td>";
  echo $row['email'];
  echo"</td><td>";
  echo $row['location'];

  echo"</td><td>";
  echo $row['state'];
  echo"</td><td>";
  echo $row['amount'];
  echo"</td><td>";
  echo $row['cdate'];
  echo"</td><td>";
  echo $row['stender'];
  echo"</td><td>";
  echo $row['description'];
  echo"</td></tr>";


}
echo"<table>";
echo "</div>";
?>
<br>
<br>
<br>
<br>
<br>

<footer class="footer">
  &copy; 2019 SADJ SOLUTIONS  All copyrights are reserved.
</footer>
</body>
</html>
