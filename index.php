<?php

	if($_SESSION['userid']){
		$userid = $_SESSION['userid'];
		$allowSyl = 1;
	}
	else {
		$allowSyl = 1;
	}

?>

<html>
	<head>
		<script type="text/javascript" src="js/changePage.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/maps.js"></script>
		<link rel="StyleSheet" type="text/css" href="css/index.css" />
		<title>WMA</title>
	</head>
	<body>
		<!-- Container -->
		<div id="container">
			<!-- Header -->
			<div id="header">
				<div id="map">
					<div id="mapTitle">Where to find us?</div>
					<div id="mapMap"></div>
				</div>
				<!-- Logo -->
				<div id="logo">
					<div id="logoDiv" onclick="changeSource('pages/home.html')"></div>
				</div>
				<div id="socialcontact">
					<p class="heading">where to find us</p>
					<p>
						Uphill Scout hut...Wednesdays<br />
						Windwhistle Lane<br />
						Weston-super-Mare, BS23 4QD<br />
					</p>
					<p>
						W-S-M Cricket Club...Saturdays<br />
						Devonshire Road<br />
						Weston-super-Mare, BS23 4NY
					</p>
				</div>
			</div>
			<!-- Nav -->
			<div id="nav">
				<div id="navHome" onclick="changeSource('pages/membership/membership.pdf')"/>
					<div class="centering">Membership</div>
				</div>
				<?php	
					if($allowSyl == 1){
						echo '
							<div id="navSyllabus" onclick="changeSource(\'pages/syllabus/syllabus1.html\')">
								<div class="centering">Syllabus</div>
									<ul id="syllabusDropdown">
										<li><a href="pages/syllabus/Syllabus_Yellow.html">Yellow</a></li>
										<li><a href="pages/syllabus/Syllabus_Orange.html">Orange</a></li>
										<li><a href="pages/syllabus/Syllabus_Green.html">Green</a></li>
										<li><a href="pages/syllabus/Syllabus_Blue.html">Blue</a></li>
										<li><a href="pages/syllabus/Syllabus_Purple.html">Purple</a></li>
										<li><a href="pages/syllabus/Syllabus_Brown.html">Brown</a></li>
										<li><a href="pages/syllabus/Syllabus_Brown2.html">Brown II</a></li>
										<li><a href="pages/syllabus/Syllabus_Black.html">Black</a></li>
									</ul>
						';
					}
					else {
						echo '
							<div id="navSyllabus" onclick="changeSource(\'pages/login.html\')">
								<div class="centering">Syllabus</div>
									<ul id="syllabusDropdown">
										<li><a href="pages/login.php">Yellow</a></li>
										<li><a href="pages/login.php">Orange</a></li>
										<li><a href="pages/login.php">Green</a></li>
										<li><a href="pages/login.php">Blue</a></li>
										<li><a href="pages/login.php">Purple</a></li>
										<li><a href="pages/login.php">Brown</a></li>
										<li><a href="pages/login.php">Brown II</a></li>
										<li><a href="pages/login.php">Black</a></li>
									</ul>
						';
					}
				?>
				</div>
				<div id="navKatas" onclick="changeSource('pages/katas/katas.php')">
					<div class="centering">Katas</div>
					<ul id="katasDropdown">
						<li><div onclick="pages/kata/katas.php#yellowDrop">Yellow</div></li>
						<li><div onclick="pages/kata/katas.php#orangeDrop">Orange</div></li>
						<li><div onclick="pages/kata/katas.php#greenDrop">Green</div></li>
						<li><div onclick="pages/kata/katas.php#blueDrop">Blue</div></li>
						<li><div onclick="pages/kata/katas.php#purpleDrop">Purple</div></li>
						<li><div onclick="pages/kata/katas.php#brownDrop">Brown</div></li>
						<li><div onclick="pages/kata/katas.php#brownIIDrop">Brown II</div></li>
						<li><div onclick="pages/kata/katas.php#blackDrop">Black</div></li>
					</ul>
				</div>
				<div id="navhistory" onclick="changeSource('pages/history/history.html')">
					<div class="centering">History of Karate</div>
				</div>
				<div id="navEngJap" onclick="changeSource('pages/japanese_syllabus/japSyl.html')">
					<div class="centering">Eng-Jap</div>
				</div>
			</div>
			<!-- Content -->
			<div id="content">
				<iframe id="iFrame1" src="pages/home.html" width="100%" height="100%" frameborder="0"></iframe>
				</div>
			</div>
			</div>
			<!-- Footer -->
			<div id="footer">
				<div id="videolinks">
					<p>Videolinks:</p>
						<li><a href="https://www.youtube.com/watch?v=jJsSGHYF7_s">kihon Kata</a></li>
						<li><a href="https://www.youtube.com/watch?v=Lrr-c5RCKpo">jion Kata</a></li>
						<li><a href="https://www.youtube.com/watch?v=tXPZFarJMh0">Bassai Dai Kata</a></li>
						<li><a href="https://www.youtube.com/watch?v=Jkv8Ks_fEqk">Kanku Dai Kata</a></li>
						<li><a href="https://www.youtube.com/watch?v=STtxUDYjK74">Shushi no Kon</a></li>
						<li><a href="https://www.youtube.com/watch?v=YE4joDAxNi4">Shusi no Kon (Bunkai)</a></li>
				</div>
				<div id="pagelinks">
					<div id="ufc">
					<a href="http://www.ufc.com/" target="_blank"><img alt="ufc" src="../media/images/ufc_logo.png" style="float:right" width="46%" height="98%"></a>
					<a href="http://www.blitzsport.com/" target="_blank"><img alt="blitz" src="../media/images/blitz.png" style="float:left" width="46%" height="98%"></a>
					</div>
				</div>	
			<div id="socialcontact1">
					<p>contact us for more details</p> 
					<p>jon-07800 321 321</p>	  
					<p>Rob-0787 086 2607</p>
					<p>mail@westonmartialarts.co.uk</p> 
					
					 <a href="http://nibbler.silktide.com/en_US/reports/ws71426.knightstone.it" height="5%" width="10%">test certificates</a> 
					 <p>for educational purposes only</p>
				</div>
			</div>
		</body>
</html>