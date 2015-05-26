<!DOCTYPE html>
<html>
	<head>
		<title>Post Form</title>
	</head>
	<body>		
			<?php
				
				$methodologyname = "";
				$methodologydescription = ""; 
				$methodname = "";
				$methoddescription = "";
				$bibref = "";
				$researchlevel = ""; 
				$radio = "";
				$credreason = "";
				$credrater = "";
				$question = "";
				$rdmethod = ""; 
				$metrics = "";
				$participants = "";
				$benefit = "";
				$result = "";
				$method = ""; 
				$context = "";
				$conlevel = "";
				$conreason = "";
				$conrater = "";
				
				if (isset($_POST["methodologyname"])) {$methodologyname = $_POST["methodologyname"];}
				if (isset($_POST["methodologydescription"])) {$methodologydescription = $_POST["methodologydescription"]; }
				if (isset($_POST["methodname"])) {$methodname = $_POST["methodname"];}
				if (isset($_POST["methoddescription"])) {$methoddescription = $_POST["methoddescription"];}
				if (isset($_POST["bibref"])) {$bibref = $_POST["bibref"];}
				if (isset($_POST["researchlevel"])) {$researchlevel = $_POST["researchlevel"];}
				if (isset($_POST["radio"])) {$radio = $_POST["radio"]; }
				if (isset($_POST["credreason"])) {$credreason = $_POST["credreason"];}
				if (isset($_POST["credrater"])) {$credrater = $_POST["credrater"];}
				if (isset($_POST["question"])) {$question = $_POST["question"];}
				if (isset($_POST["rdmethod"])) {$rdmethod = $_POST["rdmethod"];}
				if (isset($_POST["metrics"])) {$metrics = $_POST["metrics"]; }
				if (isset($_POST["participants"])) {$participants = $_POST["participants"];}
				if (isset($_POST["benefit"])) {$benefit = $_POST["benefit"];}
				if (isset($_POST["result"])) {$result = $_POST["result"];}
				if (isset($_POST["method"])) {$method = $_POST["method"];}
				if (isset($_POST["context"])) {$context = $_POST["context"]; }
				if (isset($_POST["conlevel"])) {$conlevel = $_POST["conlevel"];}
				if (isset($_POST["conreason"])) {$conreason = $_POST["conreason"];}
				if (isset($_POST["conrater"])) {$conrater = $_POST["conrater"];}
				
				$methodologynameErr = null;
				$methodologydescriptionErr = null;
				$radioErr = null;
				
				echo "<br>", $methodologyname, "</br>";
				echo "<br>", $methodologydescription, "</br>";
				echo "<br>", $methodname, "</br>";
				echo "<br>", $methoddescription, "</br>";
				echo "<br>", $bibref, "</br>";
				echo "<br>", $researchlevel, "</br>";
				echo "<br>", $radio, "</br>";
				echo "<br>", $credreason, "</br>";
				echo "<br>", $credrater, "</br>";
				echo "<br>", $question, "</br>";
				echo "<br>", $rdmethod, "</br>";
				echo "<br>", $metrics, "</br>";
				echo "<br>", $participants, "</br>";
				echo "<br>", $benefit, "</br>";
				echo "<br>", $result, "</br>";
				echo "<br>", $method, "</br>";
				echo "<br>", $context, "</br>";
				echo "<br>", $conlevel, "</br>";
				echo "<br>", $conreason, "</br>";
				echo "<br>", $conrater, "</br>";
				
				require_once ("settings.php"); 
				$conn = @mysqli_connect($host, $user, $pswd)
				or die('Failed to connect to server');
				
				@mysqli_select_db($conn, $dbnm)
				or die('Database not available');
				
				if(empty($_POST["methodologyname"])) {
					$methodologynameErr = "Methodology Name is Required";
					} else {
					if (!preg_match("/^[a-zA-Z 0-9,!?]+$/",$methodologyname)) {
						
						$methodologynameErr = "-The Methodology Name can only
						contain number values, alphanumeric characters including spaces, comma, period (full stop), exclamation
						points and question marks. Other characters or symbols are not allowed."; 
					}
					$result = mysqli_query($conn, "SELECT * From Assignment1 WHERE methodologyname = '{$methodologyname}'");
					$test = mysqli_fetch_assoc($result);
					if (isset($test)) {
						$methodologynameErr = "Methodology Name is already used";
					}
				}
				
				if(empty($_POST["methodologydescription"])) {
					$methodologydescriptionErr = "Status is Required";
					} else {
					if (!preg_match("/^[a-zA-Z 0-9,!?]+$/",$methodologydescription)) {
						$methodologydescriptionErr = "-The Methodology Description can only number values,
						alphanumeric characters including spaces, comma, period (full stop), exclamation
						point and question mark. Other characters or symbols are not allowed."; 
					}
				}
				
				if(empty($_POST["radio"])) {
					$radioErr = "Rating is Required";

				}
				
				echo "<br>", $methodologynameErr, "</br>";
				echo "<br>", $methodologydescriptionErr, "</br>";;
				echo "<br>", $radioErr, "</br>";;
				
				
				
				
				
				$query = "CREATE TABLE if not exists Assignment1 
				(methodologyname varchar(40), methodologydescription varchar(40),methodname varchar(40), methoddescription varchar(40), bibref varchar(40), researchlevel varchar(40), radio varchar(40), credreason varchar(40), credrater varchar(40), question varchar(40), rdmethod varchar(40), metrics varchar(40), participants varchar(40), benefit varchar(40), result varchar(40), method varchar(40), context varchar(40), conlevel varchar(40), conreason varchar(40), conra varchar(40))";
				$result= mysqli_query($conn, $query);
				
				if($methodologynameErr === null and $methodologydescriptionErr === null and $radioErr === null) {
					$query = "INSERT INTO Assignment1(methodologyname, methodologydescription, methodname, methoddescription, bibref , researchlevel, radio, credreason, credrater, question, rdmethod, metrics, participants, benefit, result, method, context, conlevel, conreason, conrater)
					VALUES('{$methodologyname}','{$methodologydescription}','{$methodname}','{$methoddescription}','{$bibref}','{$researchlevel}','{$radio}','{$credreason}','{$credrater}','{$question}','{$rdmethod}','{$metrics}','{$participants}','{$benefit}','{$result}','{$method}','{$context}','{$conlevel}','{$conreason}','{$conrater}')";
					if (mysqli_query($conn, $query)) {
						echo "Success you have entered correctly and the table exists";
						}else{
						echo "<br>Failed</br>";
					}
				}		
				else {
					echo "<br>error unable to add to database</br>";
				}
				
				mysqli_close($conn);
				
			?>
			<br>
		<a href="form.php">Return to Form</a>

		
		</audio>
		</center>
		</body>
		</html>		
