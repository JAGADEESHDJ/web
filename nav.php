<!DOCTYPE html>
<html>
<head>
  
<link rel="icon" href="Tender__1.png" />
  <script src="jquery.js"></script>
<style>
ul {
  list-style-type: none;
  margin-left: 2px;
  margin:1px;
  padding:1px;
  overflow: hidden;
  background-image:linear-gradient(to right, rgba(25,0,0,0), rgba(20,22,33,1));
}

#head{
position:absolute;
top:-12px;
left:110px;
z-index:-1;
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
  z-index:0;
}

li a {
  
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border-radius: 15px;
}

li a:hover:not(.active) {
  background-color: #4caff0;
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
  
  <li><a id="authority" href="areg.php">AUTHORITY</a></li>

  <li><a  id="REQUEST" href="request_tender.php">REQUEST</a></li>
  <li><a id="publish" href="tplogin_form.html">PUBLISHER</a></li>
  <li><a id="feedback" href="feedback_form.php">FEEDBACK</a></li>
  <li><a id="home" href="tend_home.html">HOME</a></li>
   <li class="li"><a  href="home.php">INDEX</a></li>
</ul></div>
</body>
</html>
