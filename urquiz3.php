<?php
	$q3 = $_POST['q3'];
	
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
				(FALSE == '0') is	<?php 
					(FALSE == '0') ? print 'true' : print 'false';
				?>. <br> Empty strings and "0" are converted to FALSE.<br>
				You answered: <?php echo $q3; ?><br>
		</fieldset>
		<p>Go to the <a href="urquiz4.html">next question.</a></p>
		<p>Go <a href="urquiz3.html">back.</a></p>
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	