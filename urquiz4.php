<?php
	$q4 = $_POST['q4'];
	
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
				(TRUE == 'FALSE') is	<?php 
					(TRUE == 'FALSE') ? print 'true' : print 'false';
				?>. <br> All other strings are converted to TRUE.<br>
				You answered: <?php echo $q4; ?><br>
		</fieldset>
		<p>Go to the <a href="urquiz5.html">next question.</a></p>
		<p>Go <a href="urquiz4.html">back.</a></p>
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	