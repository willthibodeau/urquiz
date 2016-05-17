<?php
	$q6 = $_POST['q6'];
	
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
				(INF == 'INF') is	<?php 
					(INF == 'INF') ? print 'true' : print 'false';
				?>. <br> The string "INF" is converted to 0.<br>
				You answered: <?php echo $q6; ?><br>
		</fieldset>
		<p>Go to the <a href="urquiz7.html">next question.</a></p>
		<p>Go <a href="urquiz6.html">back.</a></p>
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	