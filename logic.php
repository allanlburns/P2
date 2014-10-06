<?php

$wordlist = array('Jefferson', 'Lincoln', 'Taft', 'Kennedy', 'Nixon', 
'blue', 'red', 'yellow', 'green', 'black', 'white', 'purple', 'Sunday', 'Monday', 'Tuesday',
'Wednesday', 'Thursday', 'Friday', 'Saturday', 'lamda', 'iota', 'rho', 'sigma', 'alpha',
'beta', 'gamma');



$password = array_rand ($wordlist);

for($i=0; $i < 8; $i++) {

	echo array_rand ($wordlist) . $password;

}










//$symbols = array('!', '@', '%', '&', '*', '+', '=');


	
	







/*

'numberofwords' = $length;

//for($i = 0; $i < 'length'; $i++;) {

	//array(rand)[wordlist];
}

*/

//$password = array();




?>
