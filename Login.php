<!DOCTYPE html>
 
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
 

 
</head>
 <!--The code for the form-->
<body>
<center>
<p><a href="Login.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
</center>
<div id="container">
<form action="Login.php" method="post" id="flogin">
 
<div class="border-box">
<h2>Login Form</h2>
<label for="uname" id="un">Username:</label>
<input type="text" name="user" placeholder="Enter Username" id="uname"><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="pass" placeholder="Enter Password" id="upass"><br/>
 
<button type="submit" value="Login"  id="submit" onClick="alert('Login Successfully')" >Login</button>
 
<a href="Register.php">Dont have an account?</a>
</div>
 
</form>
</div>
 
</body>
<style>
/* The css code for the background and form*/
    body{
    margin: 0px;
    padding: 0px;
    text-align:center;
    width: 100%;
    background-color: #e6e6fae8;
    }
    body
{
  background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url("Images/Login and registration background image.jpg");
  height: 100vh;
  background-size: cover;
  background-position: center;
}
     
    input[type=text], input[type=password]{
    width:20%;
    padding:7px 10px;
    margin: 10px 0;
    display:inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }
     
    button{
    background-color:#4CAF50;
    width: 10%;
    padding: 9px 5px;
    margin:10px 0px 0px 35px;
    cursor:pointer;
    border:none;
    color:#ffffff;
    font-size: 15px;
    font-weight: bold;
    }
     
    button:hover{
    opacity:0.8;
    }
     
   
 
 
    #container{
        position: absolute;
        top:0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width:600;
        height: 300px;
        text-align: center;
    }
     
  </style>

</html>