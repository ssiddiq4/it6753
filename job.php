<!DOCTYPE html>
<!--Created by Shaheer Siddiqui
	IT5443 
	Milestone 1
	2/9/2018 -->
<html>
<head>
	<title>Center for Applied Research in Information Technology</title>
	<link rel="stylesheet" type="text/css" href="milestone.css" />
	
	<script type="text/javascript">
	function captureGrade(){
		var classGrade1 = document.forms["main"]["grade1"];
		var classGrade2 = document.forms["main"]["grade2"];
		var classGrade3 = document.forms["main"]["grade3"];
		var classGrade4 = document.forms["main"]["grade4"];
		
		var g1Selected = classGrade1.selectedIndex;
		var g2Selected = classGrade2.selectedIndex;
		var g3Selected = classGrade3.selectedIndex;
		var g4Selected = classGrade4.selectedIndex;
		
		var g1 = Number(classGrade1[g1Selected].value);
		var g2 = Number(classGrade2[g2Selected].value);
		var g3 = Number(classGrade3[g3Selected].value);
		var g4 = Number(classGrade4[g4Selected].value);

		var avgGPA = averageGPA(g1, g2, g3, g4)
		
		var edu;
		var eduButton = document.forms["main"]["education"];
		var pos;
		var posButton = document.forms["main"]["position"];

		var output;
		
		//get the value from the radio buttons
		 if (eduButton[0].checked)
			{edu=eduButton[0].value;
			}
		else if (eduButton[1].checked)
			{edu=eduButton[1].value;
			}
			
		if (posButton[0].checked)
			{pos=posButton[0].value;
			}
		else if (posButton[1].checked)
			{pos=posButton[1].value;
			}
		
		if (edu == "u") {
			if (avgGPA > 3.2) {
				output= "Congratulations! You are a stellar student. Be sure to fill out a job application on the following <a href='application.php' class='appLink'> link</a>.";
			}
			else output= "Thank you for your interest but you unfortunately do not meet the qualification.";
		}
		
		if (edu == "g") {
			if (avgGPA > 3.7) {
				output= "Congratulations! You are a stellar student. Be sure to fill out a job application on the following <a href='application.php' class='appLink'> link</a>." ;
			}
			else output= "Thank you for your interest but you unfortunately do not meet the qualification.";
		}
		
		if ( (edu == "u" || edu == "g")&&(pos == "p1" || pos == "p2") ){ 
		document.getElementById("gpaResult").innerHTML = "Your GPA is: " +avgGPA;
		document.getElementById("gpaResult").style.visibility = "visible";
		document.getElementById("confirmText").innerHTML = "" +output;
		document.getElementById("confirmText").style.visibility = "visible";
		} 
	}
	function ChangeClass(){
	
 		var edu;
		var eduButton = document.forms["main"]["education"];
		
		var pos;
		var posButton = document.forms["main"]["position"];

		//get the value from the radio buttons
		if (eduButton[0].checked)
			{edu=eduButton[0].value;
			}
		else if (eduButton[1].checked)
			{edu=eduButton[1].value;
			}
		
		if (posButton[0].checked)
			{pos=posButton[0].value;
			}
		else if (posButton[1].checked)
			{pos=posButton[1].value;
			}

		//check the value combination from the radio buttons to change the class listing 
		if (edu == "u" && pos == "p1"){
			underGradPos1();
			} 
		else { if (edu == "u" && pos == "p2"){
				underGradPos2();
				}
				else { if (edu == "g" && pos == "p1"){
						gradPos1();
						} 
						else { if (edu == "g" && pos == "p2"){
						gradPos2();
						}
						}
					}
			}
	}

	function underGradPos1(){
		document.getElementById("class1").innerHTML = "CSE 3203 Mobile System Overview: ";
		document.getElementById("class2").innerHTML = "IT 4213 Mobile Web Development: ";
		document.getElementById("class3").innerHTML = "IT 4423 Unix/Linux: ";
		document.getElementById("class4").innerHTML = "IT 4673 Virtual IT Systems: ";
	}

	function underGradPos2(){
		document.getElementById("class1").innerHTML = "IT 4153 Advanced Database: ";
		document.getElementById("class2").innerHTML = "IT 4713 BI Systems: ";
		document.getElementById("class3").innerHTML = "IT 1113 Programming Principles I: ";
		document.getElementById("class4").innerHTML = "CSE 3801 Prof. Practices & Ethics: ";
	}

	function gradPos1(){
		document.getElementById("class1").innerHTML = "IT 6203 IT Design Studio: ";
		document.getElementById("class2").innerHTML = "IT 6753 Advanced Web: ";
		document.getElementById("class3").innerHTML = "IT 5413 Software Design and Dev: ";
		document.getElementById("class4").innerHTML = "IT 6583 Business Continuity Planning & Implem: ";
	}

	function gradPos2(){
		document.getElementById("class1").innerHTML = "IT 6713 Business Intelligence: ";
		document.getElementById("class2").innerHTML = "IT 7113 Data Visualization: ";
		document.getElementById("class3").innerHTML = "IT 6643 Issues in Information Technology: ";
		document.getElementById("class4").innerHTML = "IT 6663 Data Center Management: ";
	}

	function averageGPA(g1, g2, g3, g4){
		return ((g1 + g2 + g3 + g4)/4).toFixed(1);
	}
</script>
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
						<h2>Student Openings</h2>
						<p>We are proud to state that this summer, we will have four student assistant positions open to 
						to highly qualified students! Two positions will be for Graduate students and the rest for Undergraduate students.
						Those interested in a position should complete the follow form to see if you qualify.<br><br> Please enter you education 
						level and desired position. Once selected, enter your grades for the listed classes and hit calculate to see if you 
						eligible.
						</p>
							<form name="main" onsubmit="return ChangeClass()" >
							<fieldset id="position_form">
								<legend>Qualification Form</legend>
								<br>
								<span class="fieldlabel">Student Status:</span>
									<br><input type="radio" name="education" value="u" onclick="ChangeClass()" class="radioButton" >Undergrad </input>
									<br><input type="radio" name="education" value="g" onclick="ChangeClass()" class="radioButton" >Graduate </input>
								<br><br>
								<span class="fieldlabel">Positions Opening:</span>
									<br><input type="radio" name="position" value="p1" onclick="ChangeClass()" class="radioButton" >Position 1: Web Designer</input>
									<br><input type="radio" name="position" value="p2" onclick="ChangeClass()" class="radioButton" >Position 2: Data Analyst</input>
								<br><br>
								<span class="fieldlabel" id="class1">Class 1:</span>
								<select class="selectBox" name="grade1">
									<option></option>
									<option value=4.0>A+</option>
									<option value=4.0>A</option>
									<option value=3.7>A-</option>
									<option value=3.3>B+</option>
									<option value=3.0>B</option>
									<option value=2.7>B-</option>
									<option value=2.3>C+</option>
									<option value=2.0>C</option>
									<option value=1.7>C-</option>
									<option value=1.3>D+</option>
									<option value=1.0>D</option>
									<option value=0.0>F</option>
								</select>
								<br>
								<span class="fieldlabel" id="class2">Class 2:</span>
								<select class="selectBox" name="grade2">
									<option></option>
									<option value=4.0>A+</option>
									<option value=4.0>A</option>
									<option value=3.7>A-</option>
									<option value=3.3>B+</option>
									<option value=3.0>B</option>
									<option value=2.7>B-</option>
									<option value=2.3>C+</option>
									<option value=2.0>C</option>
									<option value=1.7>C-</option>
									<option value=1.3>D+</option>
									<option value=1.0>D</option>
									<option value=0.0>F</option>
								</select>
								<br>
								<span class="fieldlabel" id="class3">Class 3:</span>
								<select class="selectBox" name="grade3">
									<option></option>
									<option value=4.0>A+</option>
									<option value=4.0>A</option>
									<option value=3.7>A-</option>
									<option value=3.3>B+</option>
									<option value=3.0>B</option>
									<option value=2.7>B-</option>
									<option value=2.3>C+</option>
									<option value=2.0>C</option>
									<option value=1.7>C-</option>
									<option value=1.3>D+</option>
									<option value=1.0>D</option>
									<option value=0.0>F</option>
								</select>
								<br>
								<span class="fieldlabel" id="class4">Class 4:</span>
								<select class="selectBox" name="grade4">
									<option></option>
									<option value=4.0>A+</option>
									<option value=4.0>A</option>
									<option value=3.7>A-</option>
									<option value=3.3>B+</option>
									<option value=3.0>B</option>
									<option value=2.7>B-</option>
									<option value=2.3>C+</option>
									<option value=2.0>C</option>
									<option value=1.7>C-</option>
									<option value=1.3>D+</option>
									<option value=1.0>D</option>
									<option value=0.0>F</option>
								</select>
								<br><br>
								<button type="button" onclick="captureGrade()" id="button">Calculate</button>
								<br><br>
								<span class="results" id="gpaResult"></span>
								<span class="results" id="confirmText"></span>
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
