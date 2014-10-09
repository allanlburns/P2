<?php

$wordlist = array('Jefferson ', 'sensatonal ', 'Lincoln ', 'jam ', 'Taft ', 'Kennedy ', 'Nixon ', 'spaz ', 
'blue ', 'impact', 'red ', 'best ', 'yellow ', 'splash ', 'green ', 'fly ', 'fresh ', 'purple ', 'Sunday ', 'Monday ', 'Tuesday ',
'Wednesday ', 'kryptonite ', 'Thursday ', 'Friday ', 'funky ', 'Saturday ', 'Oslo ', 'Paris ', 'Carthage ', 'Mickey ', 'Donald ',
'Goofy ');

$symbols = array('! ', '@ ', '% ', '& ', '* ', '+ ', '= ', '_ ', "- ");

$random_index = array_rand($symbols, 1);

//var_dump($random_index);




$number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

$random_number = array_rand($number, 1);




$password = array_rand($wordlist, $_POST['length']);



?>
