<!DOCTYPE html>
<!--Created by Shaheer Siddiqui
	IT5443 
	Milestone 1
	2/9/2018 -->
<html>
<head>
	<title>Center for Applied Research in Information Technology</title>
	<link rel="stylesheet" type="text/css" href="milestone.css" />
	<style>
		table {
			margin: 2em auto;
		}
		td {
			padding: .5em;
			font-size: 1.5em;
			border: .25em groove grey;
		}
	</style>
</head>
<body>

<div class="header">
	<?php include 'header_comp.php';?>
</div>
<div class="container">
	<div class="colmid">
		<div class="colright">
			<div class="col1wrap">
				<div class="col1pad">
					<div class="col1">
						<!-- Column 1 start -->
						<h2>Submited</h2>
								<?php include 'form_validator.php';
								$name = $degree = $school = $email = $rank = $position = $aoi = $hearing = "";
								
								  if (empty($_POST["name"])) {
									$name = "Name is required";
								  } else {
									$name = textCleaner($_POST["name"]);
									if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
										$name = "Only letters and white space allowed"; 
										}
								  }
								  
								  if (empty($_POST["degree"])) {
									$degree = "Degree is required";
								  } else {
									$degree = textCleaner($_POST["degree"]);
									if (!preg_match("/^[a-zA-Z ]*$/",$degree)) {
										$degree = "Only letters and white space allowed"; 
										}
								  }
								  
								  if (empty($_POST["school"])) {
									$school = "School is required";
								  } else {
									$school = textCleaner($_POST["school"]);
									if (!preg_match("/^[a-zA-Z ]*$/",$school)) {
										$school = "Only letters and white space allowed"; 
										}
								  }
								  
								  if (empty($_POST["email"])) {
									$email = "Email is required";
								  } else {
									$email = textCleaner($_POST["email"]);
									if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
										  $email = "Invalid email format"; 
										}
								  }
								  
								  if (empty($_POST["rank"])) {
									$rank = "Student Standing is required";
								  } else {
									$rank = textCleaner($_POST["rank"]);
								  }
								  
								  if (empty($_POST["position"])) {
									$position = "Interested position is required";
								  } else {
									$position = textCleaner($_POST["position"]);
								  }
								  
								  if (empty($_POST["aoi"])) {
									$aoi = "";
								  } else {
									
									$length=count($_POST["aoi"]);
									for ($i=0;$i<$length;$i++){
									$aoi = $aoi.$_POST["aoi"][$i].', ';}
									$aoi = textCleaner($aoi);
								  }
								  if (empty($_POST["hearing"])) {
									$hearing = "";
								  } else {
									$hearing = textCleaner($_POST["hearing"]);
								  }
								
								echo '<table>
									<tr>
										<td style="width: 12em">Name: </td>
										<td style="width: 16em">';
									echo $name;
								echo '</td>
									</tr>
									<tr>
										<td>Degree: </td>
										<td>';
									echo $degree;
								echo '</td>
									</tr>
									<tr>
										<td>School: </td>
										<td>';
									echo $school;
								echo '</td>
									</tr>
									<tr>
										<td>Email: </td>
										<td>';
									echo $email;
								echo '</td>
									</tr>
									<tr>
										<td>Student Status: </td>
										<td>';
									echo $rank;
								echo '</td>
									</tr>
									<tr>
										<td>Position: </td>
										<td>';
									echo $position;
								echo ' </td>
									</tr>
									<tr>
										<td>Areas of Interest: </td>
										<td>';
									echo substr($aoi,0,strlen($aoi)-2);
								echo '</td>
									</tr>
									<tr>
										<td>How did you hear about this posting? </td>
										<td>';
									echo $hearing;
								echo '</td>
									</tr>
								</table>';
								?>
						<!-- Column 1 end -->
					</div>
				</div>
			</div>
			<div class="col2">
				<!-- Column 2 start -->
				<?php include 'menu_comp.php';?>
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
				
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<?php include 'footer_comp.php';?>
</div>

</body>
</html>
