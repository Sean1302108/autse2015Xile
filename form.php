<!DOCTYPE html>

<html>
	
	<head>
		
		<title>Post Status Form</title>
		
	</head>
	<body>
<center>
				
			<form action="postform.php" method="POST">
			<h1>SERLER</h1>
			
				
				<h2>Methodology</h2>
				Name
<br>
				<input type="text" name="methodologyname">
				<br>
				Description
<br>
				<input type="text" name="methodologydescription" size="40">
				<br>
				<br>
	
				<h2>Method</h2>
				Name
<br>
				<input type="text" name="methodname">
				<br>
				Description
<br>
				<input type="text" name="methoddescription">
				<br>
				<br>
				
				<h2>List of Practices </h2>
				<select name="practiceList">
			  	<option value="">Select...</option>
			  	<option value="P">Practice 1</option>
			  	<option value="P2">Practice 2</option>
				</select>
				<br>
				<br>
				
				<h2>Research method</h2>
				<select name="researchMethod">
			  	<option value="">Select...</option>
			  	<option value="M">Method 1</option>
			  	<option value="M2">Method 2</option>
			  	<option value="M3">Method 3</option>
			  	<option value="M4">Method 4</option>
			  	<option value="M5">Method 5</option>
				</select>
				<br>
				<br>
				
				<h2> Research level </h2>
				<select name="researchLevel">
			  	<option value="">Select...</option>
			  	<option value="L">Level 1</option>
			  	<option value="L2">Level 2</option>
			  	<option value="L3">Level 3</option>
			  	<option value="L4">Level 4</option>
			  	<option value="L5">Level 5</option>
				</select>
				<br>
				<br>
				
				<h2>Nature of participants</h2>
				<select name="nature">
			  	<option value="">Select...</option>
			  	<option value="N">Nature 1</option>
			  	<option value="N2">Nature 2</option>
			  	<option value="N3">Nature 3</option>
			  	<option value="N4">Nature 4</option>
			  	<option value="N5">Nature 5</option>
				</select>
				<br>
				<br>
				
				<h2>Evidence Source</h2>
				Bib Ref
<br>
				<input type="text" name="bibref">
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
<br>
				<input type="text" name="credreason">
				<br>
				Rater
<br>
				<input type="text" name="credrater">
				<br>
				<br>
				
				<h2>Research Design</h2>
				Question
<br>
				<input type="text" name="question">
				<br>
				Method
<br>
				<input type="text" name="rdmethod">
				<br>
				Metrics
<br>
				<input type="text" name="metrics">
				<br>
				Participants
<br>
				<input type="text" name="participants">
				<br>
				<br>
				
				<h2>Evidence Item</h2>
				Benefit/outcome under test 
<br>
				<input type="text" name="benefit">
				<br>
				Result
<br>
				<input type="text" name="result">
				<br>
				method implementation integrity
<br>
				<input type="text" name="method">
				<br>
				Context:
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
				Confidence level 
<br>
				<input type="text" name="conlevel">
				<br>
				Reason 
<br>
				<input type="text" name="conreason">
				<br>
				Rater
<br>
				<input type="text" name="conrater">


				<br>

				<br>

				<input type="submit" value="Submit">

				<input type="reset" value="Reset"> 
<br>

				<a href="search.php">Search Practice</a>

				

			</form>			
<center>
	</body>

</html>
