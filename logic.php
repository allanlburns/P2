<?php

$wordlist = array('Jefferson', 'Lincoln', 'Taft', 'Kennedy', 'Nixon', 
'blue', 'red', 'yellow', 'green', 'black', 'white', 'purple', 'Sunday', 'Monday', 'Tuesday',
'Wednesday', 'Thursday', 'Friday', 'Saturday', 'lamda', 'iota', 'sigma', 'alpha',
'beta', 'gamma');



$password = array_rand($wordlist, 8);

foreach ($password as $key => $value) {

	echo "$key - <strong>" . $wordlist[$value] . "</strong><br />";

} //moving foreach loop to index.php eliminated password from top of page but also from anywhere on the page.










$symbols = array('!', '@', '%', '&', '*', '+', '=');

$number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

	
	







/*

'numberofwords' = $length;

//for($i = 0; $i < 'length'; $i++;) {

	//array(rand)[wordlist];
}

*/

//$password = array();




?>
