<!DOCTYPE html>

<html>	
	<head>		
		<title>Sign In</title>		
		<link rel ="stylesheet" type ="text/css" href="style_1.css">	
	</head>
	<body> 
	<div id="wrap">
	<div id ="header">
	<h1>SERLER</h1>
	</div>
		<div id="right">
		<font color="#FFE788"><h2> Sign in</h2></font>
		<br>
		
		<form action="postsignin.php" method="POST">	
			
			Username(required):			
			<input type="text" name="status">		
			<br>			
			<br>
			
			Password (required):			
			<input type="text" name="code">
			<br>
			<br>		
			
			<input type="submit" value="Submit">
			
			<input type="reset" value="Reset"> 
			
		</form>		
	</div>
	<div id="left">
	<h2> Navigation</h2>
	<ul>
		<li>	
			<a href="mainmenu.php">Home</a>
		</li>
		<li> 
			<a href="form.php">Submit Article</a>
		</li>
		<li>
			<a href="search.php">Search Article</a>
		</li>
		<li>
			<a href="about.php">About</a>
		</li>
		<li>
			<a href="signin.php">Sign in</a>
		</li>
		</ul>
	<h2> Papers </h2>
	<ul>
		<li>
			<a href="#"> Paper 1 </a>
		</li>
		<li>
			<a href="#"> Paper 2 </a>
		</li>
		<li>
			<a href="#"> Paper 3 </a>
		</li>
		<li>
			<a href="#"> Paper 4 </a>
		</li>
		<li>
			<a href="#"> Paper 5 </a>
		</li>
		</ul>
	</div>
	<div style ="clear: both;"> </div>
	<div id ="footer">
	SERLER Designed and produced by Team Xile
	</div>
	</body>		
</html>		
