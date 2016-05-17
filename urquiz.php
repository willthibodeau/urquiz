<?php
	$qa = &$_POST['qa'];
	$w = 0;
	$l = 0;
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
				(null == ' ') is	<?php 
					(null == '') ? print 'true' .$w++ : print 'false' .$l++;
				?>. <br> Null is converted to the empty string.<br>
				You answered: <?php echo $qa; ?><br>
		</fieldset>
		<p>Go to the <a href="urquiz1.html">next question.</a></p>
	
	</main>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	