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

		<form action='index.php' method='GET'>

		<p>Number of words></p><br>

		<input type ='number' name='$length' min= '4'
			max='8' step='1' value='4'><br>

		
		<p>Use a symbol?</p><br>

		<input type ='checkbox' name='symbol' value='yes'><br>

		<p>Include a number?</p><br>

		<input type ='checkbox' name='number' value='yes'><br>
		
		<input type ='submit' value='Create your password!'>

		
		<pre><?php print_r($_GET); ?></pre>

		Your password is:

		<?php echo $password ?>

		

		foreach ($password as $key => $value) {

	echo "$key - <strong>" . $wordlist[$value] . "</strong><br />";

}


	<?php echo $_GET['$length']; ?>

	<?php if (isset($var)) {

		 	echo $_GET['symbol']; }?>

		<?php if (isset($var2)) {

			echo $_GET['number']; }?>










	</body>
</html>