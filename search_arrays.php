<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found. 
// Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common 
// between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function findName($name, $nameArray, $result = FALSE){
	if (is_numeric(array_search($name, $nameArray))) {
		$result = 'TRUE';
	} else {
		$result = 'FALSE';
	}
	return $result;
}

echo findName('Tina', $names).PHP_EOL;
echo findName('Tina', $compare).PHP_EOL;

echo findName('Bob', $names).PHP_EOL;
echo findName('Bob', $compare).PHP_EOL;