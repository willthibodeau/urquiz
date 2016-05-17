<?php
	$q2 = $_POST['q2'];
	
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
				(null == 0) is	<?php 
					(null == 0) ? print 'true' : print 'false';
				?>. <br> Null is equal to any value that evaluates to FALSE.<br>
				You answered: <?php echo $q2; ?><br>
		</fieldset>
		<p>Go to the <a href="urquiz3.html">next question.</a></p>
		<p>Go <a href="urquiz2.html">back.</a></p>
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	