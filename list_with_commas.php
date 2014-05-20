<?php
// STEP 1: Create the $famous_fake_physicists string that lists the 
// physicists and contains the "and" at the end.

// STEP 2: Turn your solution into a function named humanized_list(). You should be able to pass 
// the $physicists_array as the only argument, and your function will return the result.


// STEP 3: Update your code to list the physicists by first name, in alphabetical order.

// STEP 4: Create a second argument to make alphabetical sorting optional.

// STEP 5: Default alphabetical sorting to false. If no args are passed, no sorting takes place.

function humanized_list($array){
	$end_of_array = array_pop($array);
	asort($array);
	array_push($array, 'and ' . $end_of_array);
	return implode(', ', $array);
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);
$famous_fake_physicists = humanized_list($physicists_array);


echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";


?>