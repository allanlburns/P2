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

		<p>Number of words:</p><br>

		<input type ='number' name='length' min= '4'
			max='8' step='1' value='4'><br>

		
		<p>Use a symbol?</p>

		
		<input type='hidden' name='symbol' value='0' />
		<input type ='checkbox' name='symbol' value='1' /><br>



		<p>Include a number?</p>

		<input type='hidden' name='number' value="0" />
		<input type ='checkbox' name='number' value='1' /><br><br>
		
		<input type ='submit' value='Create your password!' /><br><br>

		
		Your password is:

		
		<?php foreach ($password as $value) {

		echo $wordlist[$value]; 

		}

		if ($_POST['symbol'] == '1') {

		echo $symbols[$random_index];
		
		}

		if ($_POST['number'] == '1') {

		echo $number[$random_number];

		}

		?>



	</body>
</html>