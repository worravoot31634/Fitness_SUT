<!-- 
/*
 *	This content is generated from the PSD File Info.
 *	(Alt+Shift+Ctrl+I).
 *
 *	@desc 		
 *	@file 		educatedetails
 *	@date 		0
 *	@title 		educateDetails
 *	@author 	
 *	@keywords 	
 *	@generator 	Export Kit v1.2.9.xd
 *
*/
 -->
 
 <?php 
 
 session_start();

 include("connect.php");
 $accountID = $_SESSION["accountID"];

 $sql = "SELECT memberID,dateApp,timeApp FROM appointment WHERE accountID = ".$accountID."";

$rs = $conn->query($sql);
$row = $rs->fetch_assoc();

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<title>educatedetails</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" >
		<link rel="StyleSheet" href="educatedetails.css" />
		<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
		<!-- Add your custom HEAD content here -->

	</head>
	<body>
		<div id="content-container" >
			<div id="_bg__educatedetails"  ></div>
			<img src="skins/bg_sport.png" id="bg_sport" />
			<div id="rectangle_452"  ></div>
			<div id="___________" >
				<a style="text-decoration: none; color: white;" href="home.php"><span class="char">%E0%B8%84%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%AA%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99</span>
				</a></div>
			<div id="ellipse_13"  ></div>
			<img src="skins/sut.png" id="sut" />
			<div id="rectangle_453"  ></div>
			<div id="base"  >
				<button id="base" name="submit"></button>
			</div>
			<div id="_______" >
				<span class="char">%E0%B8%A2%E0%B8%B7%E0%B8%99%E0%B8%A2%E0%B8%B1%E0%B8%99</span>
			</div>
			<div id="_______________" >
				<br/><span class="char">%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A5%E0%B8%82%E0%B8%9F%E0%B8%B4%E0%B8%95%E0%B9%80%E0%B8%99%E0%B8%AA</span>
			</div>
			<div id="___________________" >
				<span class="char">%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%AD%E0%B8%B5%E0%B8%A2%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%9A%E0%B8%A3%E0%B8%A1<</span><br/>
			</div>
			<div id="________________________" >
				<span class="char">%E0%B8%A7%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B8%94%E0%B8%AA%E0%B8%AD%E0%B8%9A%E0%B8%AA%E0%B8%A1%E0%B8%A3%E0%B8%A3%E0%B8%96%E0%B8%A0%E0%B8%B2%E0%B8%9E</span>
			</div>
			<div id="______13_30__14_00" >
				<span class="char">%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2 </span> 
				<?php
				
				$time = $row["timeApp"];
				$timeSplit = explode("-",$time);
				echo $timeSplit[0].":00-".$timeSplit[1].":00" ?>
			</div>
			<div id="_2________2563" >
			<?php $dateApp =  $row["dateApp"];
			$date = new DateTime($dateApp);
				echo $date->format("j")."<span class='char' style='font-size:25px;'>".$date->format(" F ")."</span>".$date->format("yy");
			?>
			</div>
			<div id="_112" >
			<?php echo $row["memberID"] ?>
			</div>
			<div id="____________________ek1" >
				<a style="text-decoration: none; color: white;" href="educatedetails.php"><span class="char">%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%AD%E0%B8%B5%E0%B8%A2%E0%B8%94%E0%B8%A7%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%94%E0%B8%AA%E0%B8%AD%E0%B8%9A</span>
				</a></div>
			<div id="____________ek1" >
				<a style="text-decoration: none; color: white;" href="login___1.html"><span class="char">%E0%B8%AD%E0%B8%AD%E0%B8%81%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A</span>
				</a></div>
			

		</div>
		<script>var specialChars = document.querySelectorAll("span.char"); for(var c=0; c<specialChars.length; c++){ specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML); }</script>
	</body>
</html>