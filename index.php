<!DOCTYPE html>
<html>
<head>
	<title>Best Crisps 2021</title>
	<link rel = "icon" href = "Images/Logo.jpg" type = "image/x-icon">
	
</head>
<body>
	<header>
		<div class="logo">
		<img src="Images/Logo.jpg" alt="Logo" width="45" height="45" href="index.php">		
		</div>
		<!--This part is the navigation at the top-->
		<nav>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="Top_Crisps.php">Top Crisps</a>
				</li>
				<li>
					<a href="Edit_Crisps.php">Edit Crisps</a>
				</li>
				<li>
					<a href="Top_Manufacturers.php">Top Manufacturers</a>
				</li>
				<li>
					<a href="Edit_Manufacturers.php">Edit Manufacturers</a>
				</li>
				<li>
					<a href="Top_Ranking.php">Top Ranking</a>
				</li>
				<li>
					<a href="Edit_Ranking.php">Edit Ranking</a>
				</li>
				<li>
					<a href="Login.php">Login</a>
				</li>
				<li>
					<a href="Register.php">Register</a>
				</li>
			</ul>
		</nav>
	</header>
	<div class="banner"><img alt="" src="images/Index background image.jpg"></div>
	<div class="content">
		<!--This is the content on the webpage-->
		<p>This website was created to give individuals an insight into what the UKs most popular crisps are as well as the most popular manufacturers of them. Not only that, since I created this website, I also made table to inform every one of my favourite crisps starting with Twiglets!</p>
		<p>In the UK a “crisp” isn’t just a potato being fried and cut, its also comes in different shape and sizes and can even be cooked entirely differently like frazzles or skips. Crisps are great way to snack during the day, and even though they might not be a healthy option, there are also several healthy versions of crisps to satisfy the needs of everyone.</p>
		<p>Feel free to login or register with this website in order to add to the crisp table yourself.</p>
	</div>
	<footer>
		<p>All Right Reserved By Your Website</p>
			<ul>
				<!--This is the navigation for the bottom footer-->
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="Top_Crisps.php">Top Crisps</a>
				</li>
				<li>
					<a href="Edit_Crisps.php">Edit Crisps</a>
				</li>
				<li>
					<a href="Top_Manufacturers.php">Top Manufacturers</a>
				</li>
				<li>
					<a href="Edit_Manufacturers.php">Edit Manufacturers</a>
				</li>
				<li>
					<a href="Top_Ranking.php">Top Ranking</a>
				</li>
				<li>
					<a href="Edit_Ranking.php">Edit Ranking</a>
				</li>
				<li>
					<a href="Login.php">Login</a>
				</li>
				<li>
					<a href="Register.php">Register</a>
				</li>
			</ul>
	</footer>
</body>
<style>
	*{
		margin:0;
		padding:0;
	}
	header
	{
		height:50px;
		background:#262626;
		padding:0 50px;
	}
	.logo
	{
		width:10%;
		float:left;
		color:#fff;
		font-weight:bold;
		text-transform:uppercase;
		line-height:60px;
		font-size:35px;
		font-family:sans-serif;
	}
	nav
	{
		width:68%;
		float:right;
	}
	nav ul
	{
		list-style:none;
		float:right;
	}
	nav ul li
	{
		display: inline-block;
	}
	nav ul li a
	{
		text-decoration: none;
		color:#fff;
		font-family:sans-serif;
		font-weight:bold;
		margin:0 10px;
		line-height:60px;
		text-transform:uppercase;
	}
	.banner
	{
		height:100%;
	}
	.banner img
	{
		width:100%;
		height:90vh;
	}
	.content
	{
		padding:5%;
	}
	.content p
	{
		font-size:18px;
		line-height:1.7;
		font-family:sans-serif;
		margin-bottom:25px;
	}
	footer
	{
		background:#000;
		color:#fff;
		padding:15px 50px;
		text-align:center;
	}
	   
	/*This part is for the big image*/
	   @media (max-width: 600px)
	   {        

	header {
	 width: 50%;
	 height: 50%;
	 padding: 0;
	 text-align: center;
	}
	.logo {
	 width: 100%;
	 float: none;
	}
	nav {
	 width: 100%;
	 float: none;
	}
	nav ul li {
	 display: block;
	}
	nav ul {
	 float: none;
	}
	   }    
	</style>
</html>