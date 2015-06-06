<!DOCTYPE html>

<html>
	
	<head>
		<title>Form</title>
		<link rel ="stylesheet" type ="text/css" href="style_1.css">				
	</head>
	
	<body>
		<div id="wrap">
		<div id ="header">
		<h1>SERLER</h1>
		</div>
			<div id="right">
			<center>
			<form action="postform.php" method="POST">
				
				<font color="#FFE788"><h2> Submit Article </h2></font>
				<br>
				<p><font size="3">* Required</font></p>
				<br>
				<h3>Methodology</h3>
				Name*<br>
				<input type="text" name="methodologyname">
				<br>
				Description*<br>
				<input type="text" name="methodologydescription">
				<br><br>		
				
				
				<h3>Evidence Source</h3>
				Bibliographical Reference<br>
				<input type="text" name="bibref">
				<br><br>
				

			
					<h3 align="center"> Credibility level </h3>
						Rating* (1= low, 5= high) <br>
				1<input type="radio" name="radio" value="1" style ="vertical-align: middle">
				2<input type="radio" name="radio" value="2" style ="vertical-align: middle">
				3<input type="radio" name="radio" value="3" style ="vertical-align: middle">
				4<input type="radio" name="radio" value="4" style ="vertical-align: middle">
				5<input type="radio" name="radio" value="5" style ="vertical-align: middle">
				<br>
				Reason<br>
				<input type="text" name="credreason">
				<br>
				Rater<br>
				<input type="text" name="credrater">
				<br>
				<br>
				
				<h3>Research Design</h3>
				Question<br> 
				<input type="text" name="question">
				<br>
				Method<br> 
				<input type="text" name="rdmethod">
				<br>
				Metrics<br> 
				<input type="text" name="metrics">
				<br>
				Participants<br> 
				<input type="text" name="participants">
				<br><br> 
				
				
				<h3>Evidence Item</h3>
				Benefit/outcome under test <br> 
				<input type="text" name="benefit">
				<br>
				Result<br> 
				<input type="text" name="result">
				<br>
				method implementation <br> integrity<br> 
				<input type="text" name="method">
				<br><br> 
				<b>Context:</b>
				<br>
				Why:<br><input type="text" name="context">
				<br>
				Who:<br><input type="text" name="context">
				<br>
				What:<br><input type="text" name="context">
				<br>
				Where:<br><input type="text" name="context">
				<br>
				When:<br><input type="text" name="context">
				<br>
				How:<br><input type="text" name="context">
				<br><br>
				
				
				<h3>Confidence Rating</h3>
				Confidence level <br>
				<input type="text" name="conlevel">
				<br>
				Reason <br>
				<input type="text" name="conreason">
				<br>
				Rater<br>
				<input type="text" name="conrater">

				<br><br>

				
				<h3>List of Practices </h3>
				<select name="practiceList">
			  	<option value="">Select...</option>
			  	<option value="P">Refactoring</option>
			  	<option value="P2">Quality</option>
				<option value="P3">Coding Standards</option>
				<option value="P4">Project Specifications</option>
				</select>
				<br><br>

				
				<h3>Research method</h3>
				<select name="researchMethod">
			  	<option value="">Select...</option>
			  	<option value="M">Experimental</option>
			  	<option value="M2">Qualitative</option>
			  	<option value="M3">Quantitive</option>
			  	<option value="M4">Questionaire</option>
			  	<option value="M5">Case Study</option>
				<option value="M6">Correlation</option>
				</select>
				<br><br>
				
				
				<h3> Research level </h3>
				<select name="researchLevel">
			  	<option value="">Select...</option>
			  	<option value="L">Level 1</option>
			  	<option value="L2">Level 2</option>
			  	<option value="L3">Level 3</option>
			  	<option value="L4">Level 4</option>
			  	<option value="L5">Level 5</option>
				</select>
				<br><br>
				
				
				<h3>Nature of participants</h3>
				<select name="nature">
			  	<option value="">Select...</option>
			  	<option value="N">Amateur</option>
			  	<option value="N2">Novice</option>
			  	<option value="N3">Student</option>
			  	<option value="N4">Expert</option>
			  	<option value="N5">Professional</option>
				</select>
				<br><br>
								<input type="submit" value="Submit">

				<input type="reset" value="Reset"> 
				
				
</center>
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
