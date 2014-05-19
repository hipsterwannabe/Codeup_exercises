<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found. 
// Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common 
// between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// STEP 2
function findName($needle, $haystack){
	if ((array_search($needle, $haystack)) === false) {
		return false;
	}
	else
	{
		return true;
	}
}

// echo findName('Tina', $names).PHP_EOL;
// echo findName('Tina', $compare).PHP_EOL;

// echo findName('Bob', $names).PHP_EOL;
// echo findName('Bob', $compare).PHP_EOL;

// STEP 3
function compareNames ($array1, $array2){
	$count = 0;
	foreach ($array1 as $value) {
		if (findName($value, $array2)) {
			$count += 1;
		}
	}
	return $count;
}



echo compareNames($names, $compare).PHP_EOL;