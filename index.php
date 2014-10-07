<!DOCTYPE: html>
<html>
	<head>
		<?php require 'logic.php'; ?>

		<link type="text/css" rel= "stylesheet" href="stylesheet.css" 
	
		<title><index.php></title>
	</head>

	<body>
		<h1>Password Generator!</h1>

		<h2>Create your own xkcd-style password</h2>

		<form action='index.php' method='POST'>

		<p>Number of words></p><br>

		<input type ='number' name='length' min= '4'
			max='8' step='1' value='4'><br>

		
		<p>Use a symbol?</p><br>

		<input type ='checkbox' name='symbol' value='yes' /><br>

		<p>Include a number?</p><br>

		<input type ='checkbox' name='number' value='yes' /><br><br>
		
		<input type ='submit' value='Create your password!' /><br><br>

		
		Your password is:

		
		<?php foreach ($password as $value) {

		echo $wordlist[$value]; 

		}



		?>



	</body>
</html>