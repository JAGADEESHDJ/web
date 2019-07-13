<?php
include('nav.php');
?>

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="jquery.js"></script>
<link rel="icon" href="Tender__1.png" />
    <title>
        feedback
    </title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
  function validate(){

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/;//regular expression
if(feedback.email.value.match(mailformat))
{
document.feedback.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.feedback.email.focus();
return false;
}
}


</script>


    <style type="text/css">
    fieldset{
    	
    	width: 50%;
    	    }

    	h1{
    		color:white;
    		width:50%;

    	}
    	body{
    		background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.5)),url("../tender1.jpg");

    	}
    	body{
    		color:white;
    		


    	}
      #feedback{
  background-color: #4caff0;

}
    

.placeicon{

font-family: fontawesome;

}

input{
	border-radius: 25px;
	padding: 7px 5px;
	background-color:white;
  margin:10px 10px 10px 10px;
  border:none;

  border-radius:14px;

}


input[type=text],textarea{

  border-radius: 25px;
}
input[type=text]:focus, textarea:focus {
  border-radius: 25px;
  background-color: #ddd;
  border:none;
  margin: 25px 6px 7px 0;
    padding:5px;

  }
ul {
  list-style-type: none;
  margin-left:1px;
  margin:1px;
  padding:1px;
  overflow: hidden;
  background-image:linear-gradient(to right, rgba(25,0,0,0), rgba(20,22,33,1));
}

table{

	padding:5px 8px;
}
textarea{
  padding:10px 10px;
  margin: 25px 6px 7px 10px;
	border-radius:25px;
}
button {
	border-radius:25px;
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  height:40px;
}


button:hover {

  opacity: 0.8;
}
   


    </style>
</head>
<body>
	<center id="center">
<h1>FEEDBACK FORM</h1>

	<fieldset>
<form name="feedback-server" action="feedback_server.php" onsubmit="validate()"  method="post" >
	<table>
    <tr><th><b>Email :<sup>*</sup></b></th>
    <td><input type="email" class="placeicon"  placeholder='&#xf007; Enter Email' name="email"></td></tr>

    <tr><th><b>Name:<sup>*</sup></b></th>
    <td><input type="text" min="4"  placeholder="Enter name" name="uname" required></td></tr>
<tr><th>
    <b>COMMENT:</b></th>
    <td><textarea name="comment" min="30"
    	cols="40" rows="6" class="placeicon" placeholder="&#xf086;  give your feedback here" maxlength="150"></textarea><td></tr>

  </table>
<center><button type="submit" >POST</button></center>

</form>
</fieldset>
</center>
<style>
  
    #container{
      position:relative;
      text-align: 40px;
      border-radius: 13px 13px 13px 0px;
      border-radius: 13px  0px;
      border: 2px solid #101010;
      
      width:40%;


    }

    
    #user{
      padding:10px 20px 10px 10px; 

      border-radius: 13px  0px ;
      font-weight:bold;
      
      color:white;
       background:#228844;
    }
    #user:hover{

      background-color: #109910;

    }
    #container:hover{
background:#333;

    }

    #date{

      display:hide;
    }
    #date:hover{
display:show;
    }
    
    #com{
      
      padding:10px 20px 10px 10px; 
      border-radius:20px;
      width:40%;
      color:#fff;
    }
  </style>
</head>
<body>
  <center>
    <br>
    <br>
<h1>COMMENTS</h1></center>
<?php

include('db.php');

$sqlget = "SELECT * FROM feedback";
$sqldata = mysqli_query($conn,$sqlget) or die('error in getting');


while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
  
  echo "<div id='container'>";
  echo "<div id='user'>";

  echo $row['email'].":-".$row['username'];
  echo "</div>";
  echo "<div id='com'>";

  echo $row['comment'];
  echo "</div>";
  echo "<div id='date'>";

  echo $row['date'];
  echo "</div>";
  echo "</div>";
  echo "<br>";
}

?>

</body>
</html>