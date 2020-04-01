i<!DOCTYPE html>
<html lang="en">
    <?php $thisPage="middle"; ?>
<head>
	<title>CS@Mines On Tour</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CS@Mines On Tour">

    <link rel="stylesheet" type="text/css" href="../CSS/mainStyle.css">
</head>

<body>

	<!-- Nav Menu -->

	<?php include 'onTourHeader.php' ?>


<div id="mainArea">
<!--
	<div id="leftBar">
		<div id="leftItem">
			<a id="leftBorder" href="../php/visitPrep.php"><h1 class="centerText">Visit Preparation</h1></a>
		</div>
		<div id="leftItem">
			<a id="leftBorder" href="../php/CSUnplugged.php"><h1 class="centerText">CS Unplugged</h1></a>
		</div>
	</div>
-->

	<article>
		<section>
		<h2>Our team will guide student exploration by presenting CS Unplugged lessons that cover the following:</h2>
			<div class="bullets">
                <ul id="bullets">
                    <li>Engage middle school students with games
                        and puzzles that teach computer science
                        concepts (CS Unplugged activities)</li>
                    <li>Introduce students to computational thinking</li>
                    <li>Recommended topics: Cryptography, Advanced Binary, and Image Representation</li>
                </ul>
            </div>
		</section>
        <h3 id= "h2toh1">Preparing for a visit is easy!</h3>
	</article>
    <article>
			<h2>Middle School Preparation: </h2>
				<div class = "bullets">
				<ul id="bullets">
					<li>Be sure that students are equipped with pencils</li>
					<li>Plan to be in the room during the presentation</li>
					<li>Select a <a href="http://csunplugged.mines.edu/resources.html" target="_blank">Lesson Plan!!</a>
                    <li><a href="../php/visit.php">Request a visit</a></li>
				</ul>
            </div>
    </article>
    </div>
</body>

<?php include 'onTourFooter.php' ?>

</html>
