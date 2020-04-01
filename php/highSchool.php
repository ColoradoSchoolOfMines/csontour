<!DOCTYPE html>
<html lang="en">
    <?php $thisPage="high"; ?>
<head>
	<title>CS@Mines On Tour</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CS@Mines On Tour">

	<link rel="stylesheet" type="text/css" href="../CSS/templateStyle.css">
	<link rel="stylesheet" type="text/css" href="../CSS/mainStyle.css">
</head>

<body>

	<!-- Nav Menu -->
    <?php include 'onTourHeader.php' ?>

	<div id="mainArea">

<!--
		<div id="leftBar">
			<div id="leftItem">
				<a id="leftBorder" href="visitPrep.html"><img id="leftIcon" src="images/apple.png"></a>
				<a id="leftBorder" href="visitPrep.html"><h1 class="centerText">Visit Preparation</h1></a>
			</div>
		</div>
-->

	<article>
<!--
	<?php
		include "leftMenuHS.php";
	?>
-->
		<section>
		<h2>Our On Tour Team will engage and inform your students with a presentation that covers the following: </h2>
            <div class="bullets">   
                <ul id="bullets">
                    <li>Discuss career options in computing</li>
                    <li>Share real undergraduate classroom experience and typical projects completed</li>
                    <li>Provide examples of real undergraduate projects completed at Mines</li>
                    <li>Address stereotypes in computer science</li>
                </ul>
            </div>
		</section>
        <h3 id= "h2toh1">Preparing for a visit is easy!</h3>
	</article>
    <article>
        	<h2>High School Preparation: </h2>
            <div class = "bullets">
				<ul>
                    <li>Have students brainstorm questions that they'd like to ask the presenters after the presentation. </li>
                    <ul>
                        <li>Ex: What is being a college student like? What was your favorite computer science project?</li>
                    </ul>
                    <li><a href="../php/visit.php">Request a visit</a></li>
				</ul> 
				</div>
		<p> Our team will bring copies and all lesson materials to your classroom. In general, not much preparation is necessary on the teacher's end.</p>
	</article>
	</div>
</body>
    
    <?php include 'onTourFooter.php' ?>

</html>
