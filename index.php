<!DOCTYPE: html>
<html>
	<head>
		<?php require 'logic.php'; ?>

		<link type="text/css" rel= "stylesheet" href="stylesheet.css" 
	
		<title><index.php></title>
	</head>

	<body>
		<h1>Password Generator!</h1>

		<p>Create your own xkcd-style password</p>

		<form action='index.php' method='GET'>

		<p>Number of words></p><br>

		<input type ='text' name='numberofwords'><br>

		<p>Use a symbol?></p><br>

		<input type ='text' name='symbol'><br>

		<p>Include a number?></p><br>

		<input type ='text' name='number'><br>


		
		<input type ='submit' value='Create your password!'>

		<pre><?php print_r($_GET); ?></pre>


		Your password is:

		<?php 

			

			echo $_GET['numberofwords'];

		

		?>







	</body>
</html>