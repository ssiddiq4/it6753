<!DOCTYPE>
<!--Created by Shaheer Siddiqui
	IT5443 
	Milestone 1
	2/9/2018 -->
<html>
<head>
	<title>Center for Applied Research in Information Technology</title>
	<link rel="stylesheet" type="text/css" href="milestone.css" />
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
						<h2>Student Application</h2>
						<p>Please fill out the following form to complete the application process. Please allow 2-4 weeks for feedback. A faculity member will reach out to 
						schedule an interview.
						</p>
							<form action="process_app.php" method="post">
							<fieldset id="application_form">
								<legend>Application Form</legend>
								<br>
								<span class="fieldlabel">Name: </span><br><input type="text" name="name" class="textResponse"/>
								<br><br>
								<span class="fieldlabel">Degree: </span><br><input type="text" name="degree" class="textResponse"/>
								<br><br>
								<span class="fieldlabel">School: </span><br><input type="text" name="school" class="textResponse"/>
								<br><br>
								<span class="fieldlabel">Email: </span><br><input type="text" name="email" class="textResponse"/>
								<br><br>
								<span class="fieldlabel">Student Status:</span>
									<br><input type="radio" name="rank" value="Undergrad" class="radioButton" >Undergrad</input>
									<br><input type="radio" name="rank" value="Graduate" class="radioButton" >Graduate</input>
								<br><br>
								<span class="fieldlabel">Position:</span>
									<br><input type="radio" name="position" value="Web Designer" class="radioButton" >Web Designer</input>
									<br><input type="radio" name="position" value="Data Analyst" class="radioButton" >Data Analyst</input>
								<br><br>
								<span class="fieldlabel">Areas of Interest:</span>
									<br><input type="checkbox" name="aoi[]" value="Social Media Data Analytics" >Social Media Data Analytics</input>
									<br><input type="checkbox" name="aoi[]" value="Information Security" >Information Security</input>
									<br><input type="checkbox" name="aoi[]" value="Health Information Technology" >Health Information Technology</input>
									<br><input type="checkbox" name="aoi[]" value="Web Information Management" >Web Information Management</input>
									<br><input type="checkbox" name="aoi[]" value="Risk Assessment" >Risk Assessment</input>
									<br><input type="checkbox" name="aoi[]" value="IT Education" >IT Education</input>
								<br><br>
								<span class="fieldlabel">How did you hear about this posting?</span>
								<select class="selectBox" name="hearing">
									<option></option>
									<option value="Class Announcements">Class Announcements</option>
									<option value="Social Media">Social Media</option>
									<option value="Flyers">Flyers</option>
									<option value="Word of Mouth">Word of Mouth</option>
									<option value="Search Engine">Search Engine</option>
									<option value="Faculity Member">Faculity Member</option>
								</select>
								<br><br>
								<button type="submit" id="button">Submit</button>
								<br><br>
							</fieldset>
							</form>

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
