
<html>
	<head>
		<title>Search Process</title>
	</head>
	<body>
			
			<?php
				
				
				$input = $_GET["input"];
				require_once ("settings.php"); 
				$conn = @mysqli_connect($host, $user, $pswd)
				or die('Failed to connect to server');
				
				@mysqli_select_db($conn, $dbnm)
				or die('Database not available');
				
				$query = "SELECT * FROM Sprint2 WHERE methodologyname like '%{$input}%' or methodologydescription like '%{$input}%' ";
				$results = mysqli_query($conn, $query);
				
				echo "<table width='200%' border ='1'>";
				echo "<tr><th>methodology name</th><th>methodology description</th><th>method name</th><th>method description</th><th>bib ref</th><th>research level</th><th>Rating</th><th>cred reason</th><th>credrater</th><th>question</th><th>rd method</th><th>metrics</th><th>participants</th><th>benefit</th><th>result</th><th>method</th><th>context</th><th>con level</th><th>con reason</th><th>con rater</th></tr>";
				
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

</body>
</html>
