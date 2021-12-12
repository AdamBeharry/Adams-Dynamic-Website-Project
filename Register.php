<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Registration</title>

</head>
 <!--This creates the form for the registration-->
<body bgcolor="#E6E6FA">
<center>
<p><a href="Register.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
</center>
<form name="regi" action="Register.php" method="post">
<h2>Registration Form</h2>
 
<label for="r1" id="fn">First Name :</label>
<input type="text" name="fname" id="r1"><br/>
 
<label  for="r2" id="ln">Last Name :</label>
<input type="text" name="lname" id="r2"><br/>
 
<label  for="r3" id="un">Username :</label>
<input type="text" name="uname" id="r3"><br/>
 
<label  for="r4" id="pwd">Password :</label>
<input type="password" name="pass" id="r4"><br/>
 
<label  for="r5" id="em">Email :</label>
<input type="text" name="email" id="r5"><br/>
 


 
<!--button-->
<button type="submit" value="Submit"  id="button" onClick="alert('submit Successfully')" href="Login.php">Register</button>
<a href="Login.php">Back to Login</a>
 
</form>

 
</body>
<style>
/*The css code for the background and the form to make it look better */
body{
margin: 100px;
text-align: center;
align: center;
}
body
{
  background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url("Images/Login and registration background image.jpg");
  height: 100vh;
  background-size: cover;
  background-position: center;
}
 
input[type=text],[type=password],[type=number]{
width: 20%;
margin: 8px 0;
padding: 7px 10px;
display: inline-block;
border:1px solid #ccc;
box-sizing: border-box;
}
 
button{
background-color:#4CAF50;
width: 10%;
padding: 9px 5px;
margin:5px 0;
cursor:pointer;
border:none;
color:#ffffff;
margin-left: 80px;
}
 
button:hover{
opacity:0.8;
}
 

 
#em{
margin-left:30px;
}
</style>

</html>