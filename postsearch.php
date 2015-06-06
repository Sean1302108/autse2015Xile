<!DOCTYPE html>
			


<html>	
	<head>		
		<title>Sign In</title>		
		<link rel ="stylesheet" type ="text/css" href="style_1.css">	
	</head>
	<body> 
	<center>
			<?php
				
						/*
				calls to database
				*/
				$input = $_GET["input"];
				require_once ("settings.php"); 
				$conn = @mysqli_connect($host, $user, $pswd)
				or die('Failed to connect to server');
					/*
				if database not available will print error message
				*/
				@mysqli_select_db($conn, $dbnm)
				or die('Database not available');
						/*
				query to database
				*/
				$query = "SELECT * FROM Sprint2 WHERE methodologyname like '%{$input}%' or methodologydescription like '%{$input}%' or radio like '%{$input}%'";
				$results = mysqli_query($conn, $query);
				
				echo "<table width='50%' border ='1'>";
				echo "<tr><th>methodology <br>name</th><th>methodology <br> description</th><th>method<br> name</th><th>method <br>description</th><th>bib <br>ref</th><th>research<br> level</th><th>Rating</th><th>cred reason</th><th>credrater</th><th>question</th><th>rd <br>method</th><th>metrics</th><th>participants</th><th>benefit</th><th>result</th><th>method</th><th>context</th><th>con <br>level</th><th>con <br>reason</th><th>con <br>rater</th></tr>";
					/*
				grabs data from database and posts to table
				*/
				while($row = mysqli_fetch_assoc($results)) {
					echo "<tr><td> {$row['methodologyname']}</td>";
					echo "<td> {$row['methodologydescription']}</td>";
					echo "<td> {$row['methodname']}</td>";
					echo "<td> {$row['methoddescription']}</td>";
					echo "<td> {$row['bibref']}</td>";
					echo "<td> {$row['researchlevel']}</td>";
					echo "<td> {$row['radio']}</td>";
					echo "<td> {$row['credreason']}</td>";
					echo "<td> {$row['credrater']}</td>";
					echo "<td> {$row['question']}</td>";
					echo "<td> {$row['rdmethod']}</td>";
					echo "<td> {$row['metrics']}</td>";
					echo "<td> {$row['participants']}</td>";
					echo "<td> {$row['benefit']}</td>";
					echo "<td> {$row['result']}</td>";
					echo "<td> {$row['method']}</td>";
					echo "<td> {$row['context']}</td>";
					echo "<td> {$row['conlevel']}</td>";
					echo "<td> {$row['conreason']}</td>";
					echo "<td> {$row['conrater']}</td>";
					echo "</tr>";
				}
			
				mysqli_free_result($results);
				mysqli_close($conn);
			?>
</center>
	<div id="wrap">
	<div id ="header">
		<h1>SERLER</h1>
		</div>
		<div id="right">
		<font color="#FFE788"><h2> Search Results</h2></font>
		<br>
		
		<form action="postsignin.php" method="POST">	
			
			Search results below in the table...
			
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
