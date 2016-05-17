<?php
	$q7 = $_POST['q7'];
	
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
				(0 == ' ') is	<?php 
					(0 == '') ? print 'true' : print 'false';
				?>. <br> The empty string is converted to 0.<br>
				You answered: <?php echo $q7; ?><br>
		</fieldset>
		<p>Go to the <a href="urquiz8.html">next question.</a></p>
		<p>Go <a href="urquiz7.html">back.</a></p>
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	