<?php
	
	// Constants
	define("TITLE", "Associative Arrays");
	// Custom Variables
		$my_name = "Zac";
		$lesson_number = 7;

	// Moustache Associative Array

	$handlebar = array(
		name => "handleBar",
		creep_factor => "high",
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo $TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_number; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo $handlebar["name"]; ?> 
				Is
				<?php echo $handlebar["creep_factor"]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><!-- CREEP FACTOR --></strong> and takes <strong><!-- GROWTH DAYS --> days</strong> to grow on average.</strong></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y"); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
