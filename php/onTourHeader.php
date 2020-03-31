<!DOCTYPE html>
<html lang="en">
<head>
        <title>CS@Mines On Tour</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CS@Mines On Tour">
        
        <link rel="stylesheet" type="text/css" href="../CSS/header.css">

<body id="body" class="light-mode">
		<header id="header">
			 <img id="onTourLogo" src="../images/CSlogo.png" alt="Cs On Tour Logo">
		</header>
		
		<div class="nav-bar">
            <a href="/php/index.php" class="<?php if ($thisPage=="index") echo 'current'; ?>">Home</a>
			<a href="/php/visit.php" class="<?php if ($thisPage=="visit") echo 'current'; ?>">Request a Visit</a>
			<a href="/php/theTeam.php" class="<?php if ($thisPage=="theTeam") echo 'current'; ?>">The Team</a>
			
<!--
			<div class="dropdown">
				<a class="dropbtn">Our Programs</a>
				<div class="dropdown-content">
				    <a href="/php/highSchool.php">High School</a>
                    <a href="/php/middleSchool.php">Middle School</a>
                    <a href="/php/elementarySchool.php">Elementary School</a>
				</div>
			</div>
-->
			
            <a href="reviews.php" class="<?php if ($thisPage=="reviews") echo 'current'; ?>">Reviews</a>
			
		</div>
		<hr>
    
     <?php include 'programs.php' ?>
    
</body>
