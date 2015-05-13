<!DOCTYPE html>

<html>	
	<head>		
		<title>Please sign in</title>		
	</head>	
	<body>
		
		<h1>SERLER</h1>
		
		<form action="signinprocess.php" method="POST">	
			
			Username(required):			
			<input type="text" name="user">		
			<br>			
			<br>
			
			Password (required):			
			<input type="text" name="code" maxlength="5">
			<br>
			<br>		
			
			<input type="submit" value="Submit">
			
			<input type="reset" value="Reset"> 
			
		</form>		
		
		<br>		
		<a href="mainmenu.php">Return to Home Page</a>
		
	</body>		
</html>		
