<?php

$wordlist = array('Jefferson ', 'Lincoln ', 'Taft ', 'Kennedy ', 'Nixon ', 
'blue ', 'red ', 'yellow ', 'green ', 'black ', 'white ', 'purple ', 'Sunday ', 'Monday ', 'Tuesday ',
'Wednesday ', 'Thursday ', 'Friday ', 'Saturday ', 'Oslo ', 'Paris ', 'Carthage ', 'MickeyMouse ', 'DonaldDuck ',
'Goofy ');

$symbols = array('! ', '@ ', '% ', '& ', '* ', '+ ', '= ');

$random_index = array_rand($symbols, 1);

//var_dump($random_index);




$number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

$random_number = array_rand($number, 1);




$password = array_rand($wordlist, $_POST['length']);



?>
