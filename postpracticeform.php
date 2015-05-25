<!DOCTYPE html>

<html>
	
	<head>
		
		<title>Post Status Form</title>
		
	</head>
	<body>
				
			<form action="poststatusprocess.php" method="POST">
			<h1>SERLER</h1>
				<h2>Methodology</h2>
				Name
				<input type="text" name="methodologyname" maxlength="40">
				<br>
				Description
				<input type="text" name="methodologydescription" size="40">
				<br>
				<br>
				
				<h2>Method</h2>
				Name
				<input type="text" name="methodname">
				<br>
				Description
				<input type="text" name="methoddescription">
				<br>
				<br>
				
				<h2>Evidence Source</h2>
				Bib Ref
				<input type="text" name="bibref">
				<br>
				Research Level
				<input type="text" name="researchlevel">
				<br>
				<br>
				
				<h2>Credibility Rating</h2>
				Credibility Level
				1<input type="radio" name="radio" value="1">
				2<input type="radio" name="radio" value="2">
				3<input type="radio" name="radio" value="3">
				4<input type="radio" name="radio" value="4">
				5<input type="radio" name="radio" value="5">
				<br>
				Reason
				<input type="text" name="credreason">
				<br>
				Rater
				<input type="text" name="credrater">
				<br>
				<br>
				
				<h2>Research Design</h2>
				Question
				<input type="text" name="question">
				<br>
				Method
				<input type="text" name="rdmethod">
				<br>
				Metrics
				<input type="text" name="metrics">
				<br>
				Participants
				<input type="text" name="participants">
				<br>
				<br>
				
				<h2>Evidence Item</h2>
				Benefit/outcome under test 
				<input type="text" name="benefit">
				<br>
				Result
				<input type="text" name="result">
				<br>
				method implementation integrity
				<input type="text" name="method">
				<br>
				Context
				<br>
				Why:<input type="text" name="context">
				<br>
				Who:<input type="text" name="context">
				<br>
				What:<input type="text" name="context">
				<br>
				Where:<input type="text" name="context">
				<br>
				When:<input type="text" name="context">
				<br>
				How:<input type="text" name="context">
				<br>
				<br>
				
				<h2>Confidence Rating</h2>
				Confidence level 
				<input type="text" name="conlevel">
				<br>
				Reason 
				<input type="text" name="conreason">
				<br>
				Rater
				<input type="text" name="conrater">
				<br>
				<br>
				
				<br>
				<a href="index.php">Return to Home Page</a>
	
			</form>			
	</body>
</html>
