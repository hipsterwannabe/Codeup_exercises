<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
//Construct a loop that iterates through each value 
//and outputs its type as either integer, float, boolean, array, null, or string.

// foreach ($things as $thing) {
// 	if (is_int($thing)) {
// 		echo "$thing is an Integer\n";
// 	} elseif (is_float($thing)) {
// 		echo "$thing is a Float\n";
// 	} elseif (is_bool($thing)) {
// 		echo "$thing is a Boolean\n";
// 	} elseif (is_array($thing)) {
// 		echo "$thing is an Array\n";
// 	} elseif (is_null($thing)) {
// 		echo "$thing is a Null\n";
// 	} elseif (is_string($thing)) {
// 		echo "$thing is a String\n";
// 	}
// }

//Construct a loop that iterates through each value 
//and outputs only values with a type that is scalar

// foreach ($things as $thing) {
// 	if (is_scalar($thing)) {
// 		fwrite(STDOUT, $thing.PHP_EOL);
// 	}
// }

//Create a loop that will echo out every value, including those nested in arrays.

foreach ($things as $thing) {
	if (is_array($thing)){
		print_r($thing);
	} else {
	echo $thing.PHP_EOL;
	}
}

?>