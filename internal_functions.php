<?php

$nothing = NULL;
$something = 72;
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, 
// and display "$variable_name is SET|EMPTY"

function setEmpty($var){
	if (isset($var)) {
		echo "$var is set, boss!\n";
	} elseif (empty($var)) {
		echo "$var is empty, boss!\n";
	}
}

setEmpty($nothing);
setEmpty($something);
setEmpty($array);
// TEST: If var $nothing is set, display 'variable is SET'

// TEST: If var $nothing is empty, display 'variable is EMPTY'

// TEST: If var $something is set, display 'variable is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results
//-----------------------------------------------------
// Create the program to meet the criteria set by each comment.

// Test and verify the output is as expected.

// Update the 'is set' check on $something to see if it is 'empty'. What happens?

// Revert previous change.

// Before the first conditional, unset($nothing). What happens?

// Find php.net function reference for the following groups: arrays, math, and strings. 
// Familiarize yourself with the available options by reading the descriptions of 
// each function in each list.