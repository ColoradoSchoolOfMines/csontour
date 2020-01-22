<!DOCTYPE html>
<html lang="en">
<head>
	<title>CS@Mines On Tour</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CS@Mines On Tour">

	<link rel="stylesheet" type="text/css" href="templateStyle.css">
	<link rel="stylesheet" type="text/css" href="mainStyle.css">
</head>

<body>

	<!-- Nav Menu -->
    <?php include 'onTourHeader.php' ?>

	<div id="mainArea">

		<div id="leftBar">
			<div id="leftItem">
				<a id="leftBorder" href="visitPrep.html"><img id="leftIcon" src="images/apple.png"></a>
				<a id="leftBorder" href="visitPrep.html"><h1 class="centerText">Visit Preparation</h1></a>
			</div>
		</div>

	<article>
	<?php
		include "leftMenuHS.php";
	?>
		<section>
		<h2>Our On Tour Team will engage and inform your students with a presentation that covers the following: </h1>
			<ol id="bullets">
				<li>Discuss career options in computing</li>
				<li>Share real undergraduate classroom experience and typical projects completed</li>
				<li>Provide examples of real undergraduate projects completed at Mines</li>
				<li>Address stereotypes in computer science</li>
			</ol>
		</section>
	</article>
	</div>

	<section id="footer">
		<p class="footer">Team Lead: Jordan Card <br> jcard@mymail.mines.edu </p>
		<h1 class="footer">CS@Mines On Tour</h1>
		<img id="minesImage" src="images/minesLogo.png" class="footer">
	</section>

</body>

</html>
