<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
    <meta name="author" content="MATTHEW EMMANUEL DJ. ANIBAN">
    <title>Using RadioButtons/Checkboxes</title>
	<style>	
		body{
			background:url(nightbackground.gif);
			background-color:#001332;
		}

		table{
			font-family: consolas;
			color: #001332;
			border-collapse: collapse;
			width: 50%
		}

		th{
			color: #001332;
			background-color: #dce9ff;
			padding: 15pt 40pt 15pt 40pt;
			font-size: 20pt;
			border: 5px groove #dce9ff;
		}

		td{
			color: #dce9ff;
			background-color: #001332;
			padding: 15pt 15pt 15pt 15pt;
			font-size: 15pt;
			border: 5px groove #dce9ff;
		}

		h3{
			color: #001332;
			background-color: #dce9ff;
			padding: 15pt 15pt 15pt 15pt;
			text-align: center;
		}
		
		.error {
			color: #FF0000;
		}
		
		input[type = text]{
			font-size: 15pt;
			width: 300pt;
		}
		
		img{
			height: 200pt;
		}	

		.textblue{
			color: #ff0;
		}
	</style>
</head>

<body>
	<link rel="stylesheet" type="text/css" href="" />
	<table align = "center">
		<tr>
			<td><h3>USING RADIO BUTTONS</h3></td>			
		</tr>
		
		<tr>
			<td>
				<?php
					if (empty($_POST['firstname']) OR empty($_POST['etype'])){
						global $firstnameErr; 
						global $etypeErr;
						
						$firstname = $etype = "";

						if(empty($_POST['firstname'])){
							$_POST['firstname'] = "";
							$firstnameErr = "NO INPUT: Name is required. <br>";
							echo $firstnameErr;
							
						}else {
							$firstname = $_POST['firstname'];
						}
						
						if (!preg_match("/^[a-zA-Z .]*$/", $firstname)){
							$firstnameErr = "ERROR: Only letters and white space allowed in Firstname. <br>";
							echo $firstnameErr;
						}			
						
						if(empty($_POST['etype'])){
							$_POST['etype'] = "";
							$etypeErr = "NO INPUT: Please select your employment type. <br>";
							echo $etypeErr;
						} else {
							$etype = test_input($_POST["etype"]);
						}
					}else{
						$firstname = $_POST['firstname'];
						$etype = $_POST['etype'];
						if (!preg_match("/^[a-zA-Z .]*$/", $firstname)) {
								$firstnameErr = "ERROR: Only letters and white space allowed in Firstname";
								echo $firstnameErr;
						} else {
							$firstname = test_input ($_POST["firstname"]);
							echo "You are <span class = 'textblue'> $firstname </span> and ";
							echo "your employment type is: ";
							echo "<span class = 'textblue'> $etype </span>";
						}						
					}
					
					function test_input($data){
						$data = trim ($data); 
						$data = stripslashes ($data); 
						$data = htmlspecialchars ($data); 
						return $data;
					}
				?>
				
			</td>			
		</tr>
	</table>
	<br><br>
	<table align = "center">
		<tr>
			<td><h3>USING CHECKBOXES</h3></td>			
		</tr>
		
		<tr>
			<td>
				<?php
			
					if(isset($_POST['BA'])){
						$BA = $_POST['BA'];
					} else {
						$BA = "";
					}
						
					if(isset($_POST['MA'])){
						$MA = $_POST['MA'];
					} else {
						$MA = "";
					}
						
					if(isset($_POST['Phd'])){
						$Phd = $_POST['Phd'];
					} else {
						$Phd = "";
					}
					
					if(empty($_POST['firstname'])){
						$_POST['firstname'] = "";
						$firstnameErr = "NO INPUT: Name is required. <br>";
						echo $firstnameErr;
					}else{
						$firstname = $_POST['firstname'];
						if (!preg_match("/^[a-zA-Z .]*$/", $firstname)) {
								$firstnameErr = "ERROR: Only letters and white space allowed";
								echo $firstnameErr;
						} else {
							$firstname = test_input ($_POST["firstname"]);
							if(empty($BA) && empty($MA) && empty($Phd)){
								print "You are $firstname and you have no degree/s. ";
							}else {
								print "You are <span class = 'textblue'> $firstname </span> and ";
								print "the degree/s you've earned are: ";
								print "<span class = 'textblue'>$BA </span>";
								print "<span class = 'textblue'>$MA </span>";
								print "<span class = 'textblue'>$Phd </span>";
							}
						}						
					}
				?>
			</td>			
		</tr>
	</table>
	<br><br>
	<table align = "center">
		<tr align = "center">
			<td>
				<form action="ANIBAN_TING_1D_USERINPUT_FORMS.html">
					<input type="submit" value="Go back" />
				</form>
			</td>
		</tr>
	</table>
	
</body>
</html>