<?php
	$q5 = $_POST['q5'];
	
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
				(3.5 == "\t3.5 mi") is	<?php 
					(3.5 == "\t3.5 mi") ? print 'true' : print 'false';
				?>. <br> The string is converted to a number and then compared.<br>
				You answered: <?php echo $q5; ?><br>
		</fieldset>
		<p>Go to the <a href="urquiz6.html">next question.</a></p>
		<p>Go <a href="urquiz5.html">back.</a></p>
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	