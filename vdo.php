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
	echo 'sdfsdfsd';	<div id="content-container" >
			<div id="_bg__vdo"  ></div>
			<img src="skins/bg_sport.png" id="bg_sport" />
			<div id="rectangle_454"  ></div>
			<div id="rectangle_452"  ></div>
			<div id="___________" >
				<a style="color:white;text-decoration: none;" href="home.html"><span class="char">%E0%B8%84%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%AA%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99</span>
				</a></div>
			<div id="ellipse_13"  ></div>
			<img src="skins/sut.png" id="sut" />
			<div id="videoDiv" style="margin-top: 80px;">
					<video   id="Video1" width="1280" height="510" controls>
					<source  id = "videoTrain" src="Uxjaa1.mp4" type="video/mp4">
				</video>
			</div>
			<div id="_______1_" >
				<span class="char">%E0%B8%9A%E0%B8%97%E0%B8%97%E0%B8%B5%E0%B9%88 </span> 1 
			</div>
			<div id="listVideo">
				<a href ="vdo2.html"><img style="cursor: pointer;" onclick = "changeVideo(2)" src="images/EP2.png" id="_4203" />
					</a>
			</div>
			

			<div id="_______2" >
				<span style="color:black;" class="char">%E0%B8%9A%E0%B8%97%E0%B8%97%E0%B8%B5%E0%B9%88 2</span> 
			</div>


			<div id="playbutton"  >
				<div id="base"  ></div>
				<img src="skins/icon.png" id="icon" />

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

	function changeVideo(num){

		var video = document.getElementById("videoDiv");
		var text = document.getElementById("_______1_");
		var text2 = document.getElementById("_______2");
		var listVideo = document.getElementById("listVideo");

		switch(num) {
  			case 1:
			  video.innerHTML = '<video  id="Video1" width="1280" height="510" controls><source  id = "videoTrain" src="Uxjaa1.mp4" type="video/mp4"></video>';
				text.innerHTML = '<span class="char">บทที่ </span> 1';
				text2.innerHTML = '<span style="color:black;" class="char">บทที่ 2</span>';
				listVideo.innerHTML = '<img style="cursor: pointer;" onclick = "changeVideo(2)" src="images/EP2.png" id="_4203" />';
			  

				break;
			case 2:
				video.innerHTML = '<video id="Video2" width="1280" height="510" controls><source  id = "videoTrain" src="Uxjaa2.mp4" type="video/mp4"></video>';
				text.innerHTML = '<span class="char">บทที่ </span> 2';
				text2.innerHTML = '<span style="color:black;" class="char">บทที่ 1</span>';
				listVideo.innerHTML = '<img style="cursor: pointer;" onclick = "changeVideo(1)" src="images/EP1.png" id="_4203" />';
				break;
			default:
				break;
}

	}



	var vid1 = document.getElementById("Video1");

	vid1.ontimeupdate = function() {
		console.log(vid1.currentTime);
	};

	vid1.onended = function() {
  alert("วิดีโอแรกจบแร้ววว ไปต่อ 2 จร้าา");
  window.location.href = 'vdo2.html';
};




	</script> 