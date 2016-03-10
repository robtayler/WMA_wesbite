<?php

	$id = $_GET['id'];
	switch($id){
		case 'yellowDrop':
		runJavascript("yellowDrop");
		break;
		case 'orangeDrop':
		runJavascript("orangeDrop");
		break;
		case 'greenDrop':
		runJavascript("greenDrop");
		break;
		case 'blueDrop':
		runJavascript("blueDrop");
		break;
		case 'purpleDrop':
		runJavascript("purpleDrop");
		break;
		case 'brownDrop':
		runJavascript("brownDrop");
		break;
		case 'brownIIDrop':
		runJavascript("brownIIDrop");
		break;
		case 'blackDrop':
		runJavascript("blackDrop");
		break;
	}
	
	function runJavascript($id){
		echo '
			<script>
				alert('.$id.');
				document.getElementById('.$id.').style.display = "block";
			</script>
		';
	}

?>

<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="../../css/katas.css" />
		<script src="../../js/showHide.js"></script>
	</head>
	<body>
		<div id="main">
			<p class="heading">Katas</p>
			<ul>
				<hr/>
				<div class="button" onclick="showHide('yellowDrop')"><li>Yellow</li><hr/></div>
				<div id="yellowDrop">
					<a href="../syllabus/1_yellow/kihon_kata.pdf">Kihon Kata</a>		
					<br/><hr/>
				</div>
				<div class="button" onclick="showHide('orangeDrop')"><li>Orange</li><hr/></div>
				<div id="orangeDrop">
					<a href="../syllabus/2_orange/orange_belt_kata.pdf">Orange Belt Kata</a>		
					<br/><hr/>
				</div>
				<div class="button" onclick="showHide('greenDrop')"><li>Green</li><hr/></div>
				<div id="greenDrop">
					<a href="../syllabus/3_green/green_belt_kata.pdf">Green Belt Kata</a>
					<br/><hr/>
				</div>
				<div class="button" onclick="showHide('blueDrop')"><li>Blue</li><hr/></div>
				<div id="blueDrop">
					<br/><hr/>
				</div>
				<div class="button" onclick="showHide('purpleDrop')"><li>Purple</li><hr/></div>
				<div id="purpleDrop">					
					<br/><hr/>
				</div>
				<div class="button" onclick="showHide('brownDrop')"><li>Brown</li><hr/></div>
				<div id="brownDrop">
					<br/><hr/>
				</div>
				<div class="button" onclick="showHide('brownIIDrop')"><li>Brown II</li><hr/></div>
				<div id="brownIIDrop">
					<br/><hr/>
				</div>
				<div class="button" onclick="showHide('blackDrop')"><li>Black</li><hr/></div>
				<div id="blackDrop">
					<a href="../syllabus/8_black/bassai_dai.pdf">Bassai Dai Kata</a><br/>
					<a href="../syllabus/8_black/bassai_sho.pdf">Bassai Sho Kata</a><br/>
					<a href="../syllabus/8_black/kanku_dai.pdf">Kanku Dai Kata</a><br/>
					<a href="../syllabus/8_black/tekki_sandan.pdf">Tekki Sandan Kata</a>
					<br/><hr/>
				</div>
			</ul>
		</div>
	</body>
</html>