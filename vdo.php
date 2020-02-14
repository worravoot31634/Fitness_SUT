<!-- 
/*
 *	This content is generated from the PSD File Info.
 *	(Alt+Shift+Ctrl+I).
 *
 *	@desc 		
 *	@file 		vdo
 *	@date 		0
 *	@title 		vdo
 *	@author 	
 *	@keywords 	
 *	@generator 	Export Kit v1.2.9.xd
 *
*/
 -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >

<?php
session_start();
	//$_SESSION['accountID'] = 1;
	include 'connect.php';
?>


	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<title>vdo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" >
		<link rel="StyleSheet" href="vdo.css" />
		<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
		<!-- Add your custom HEAD content here -->

	</head>
	<body>
	<div id="content-container" >
			<div id="_bg__vdo"  ></div>
			<img src="skins/bg_sport.png" id="bg_sport" />
			<div id="rectangle_454"  ></div>
			<div id="rectangle_452"  ></div>
			<div id="___________" >
				<a style="color:white;text-decoration: none;" href="home.php"><span class="char">%E0%B8%84%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%AA%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99</span>
				</a></div>
			<div id="ellipse_13"  ></div>
			<img src="skins/sut.png" id="sut" />
			<div id="videoDiv" style="margin-top: 80px;">
					<video   id="Video1" width="1280" height="510" controls>
					<source  id = "videoTrain" src="Course1.mp4" type="video/mp4">
				</video>
			</div>
			<div id="_______1_" >
				<span class="char">บทที่ </span> 1 
			</div>
			
			<div id="listVideo">
				<a href ="vdo2.php"><img style="cursor: pointer;" onclick = "changeVideo(2)" src="images/EP2.png" id="_4203" />
					</a>
			</div>
			<a href ="vdo4.php"><img src="skins/_468884_pfz4p2_187.png" id="_468884_pfz4p2_187"></a>
			<div id="playbutton_ek1">
				<div id="base_ek1"></div>
				<img src="skins/icon_ek1.png" id="icon_ek1">

			</div>
			
			<a href ="vdo3.php"><img src="skins/_2208.png" id="_2208"></a>
			<a href ="vdo5.php"><img src="skins/og29w80.png" id="og29w80"></a>
			<div id="_______2" >
				<span style="color:black;" class="char">บทที่ 2</span> 
			</div>
			<div id="_______3">
				<span style="color:black;" class="char">บทที่ 3</span>
			</div>
			<div id="_______4">
				<span style="color:black;" class="char">บทที่ 4</span>
			</div>
			<div id="_______5">
				<span style="color:black;" class="char">บทที่ 5</span>
			</div>


			<div id="playbutton"  >
				<div id="base"  ></div>
				<img src="skins/icon.png" id="icon" />

			</div>
			<div id="playbutton_ek1"  >
				<div id="base_ek2"  ></div>
				<img src="skins/icon_ek2.png" id="icon_ek2" />

			</div>

			<div id="playbutton_ek2">
				<div id="base_ek3"></div>
				<img src="skins/icon_ek3.png" id="icon_ek3">

			</div>
			
			<div id="playbutton_ek3">
				<div id="base_ek3"></div>
				<img src="skins/icon_ek3.png" id="icon_ek3">

			</div>

			
			
			
			
			
			<div id="___________________" >
				<span class="char">%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%AD%E0%B8%B5%E0%B8%A2%E0%B8%94%E0%B8%A7%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%94%E0%B8%AA%E0%B8%AD%E0%B8%9A</span>
			</div>
			<div id="____________ek1" >
				<span class="char">%E0%B8%AD%E0%B8%AD%E0%B8%81%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A</span>
			</div>

		</div>
		<script>var specialChars = document.querySelectorAll("span.char"); for(var c=0; c<specialChars.length; c++){ specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML); }</script>
	</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	//var vid = document.getElementById("Video1");

	//vid.currentTime=0;

	/*
	function getCurTime() { 
	  alert(vid.currentTime);
	} */
	/*function setCurTime() { 
	  vid.currentTime=11;
	} */

	
	var vid1 = document.getElementById("Video1");

<?php

$sql="SELECT * FROM video WHERE accountID = " . $_SESSION['accountID'];
$rs=$conn->query($sql);
$video1 = 0;
$video2 = 0;

while($row = $rs->fetch_assoc()) {
	$video1 = $row['video1'];
	$video2 = $row['video2'];
	//echo 'alert("'  . $video1 . '");';
	
}

echo "vid1.currentTime=" . $video1 . ";";

if($video1 >= 76){
    echo 'if (confirm("คุณดูตอนที่ 1 เสร็จแล้ว ต้องการไปยังตอนที่ 2 หรือไม่")){
		window.location.href = "vdo2.php";
	}else{
		vid1.currentTime = 74;
	}';
}

?>

	

	vid1.ontimeupdate = function() {
		console.log(vid1.currentTime);

		$(document).ready(function() {
	
			var userdata = {
      'time': vid1.currentTime,
      'accountID': <?php echo $_SESSION['accountID'] ?>,
	  'video': 'video1'
    };
    console.log(userdata);

				$.ajax({
					type: "POST",
					url: "updateVideo.php",
					data: userdata,
					success: function(data) {
						console.log(data);
					}
				});

					
				
			});
		
	}

	vid1.onended = function() {
		if (confirm("คุณดูตอนที่ 1 เสร็จแล้ว ต้องการไปยังตอนที่ 2 หรือไม่")){
		window.location.href = "vdo2.php";
	}else{
	}
};



	</script> 