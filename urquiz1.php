<?php
include'funLib.php';
	$q1 = $_POST['q1'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Unusual Results with the Equality Operator Answer</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<main>
	<h1>Unusual Results with the Equality Operator</h1>
		<fieldset>
			<legend>Here are the results!</legend>
				(null == false) is	<?php 
					(null == false) ? print 'true' : print 'false';
				?>. <br> Null is converted to FALSE.<br>
				You answered: <?php echo $q1; ?><br>
		</fieldset>
		<?php echo "You have $w winners and  $l loosers;" ?>
		<p>Go to the <a href="urquiz2.html">next question.</a></p>
		<p>Go <a href="urquiz1.html">back.</a></p>
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	