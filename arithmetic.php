<?php


// 1.Validate all the arguments, and display an error if the input is not numeric.

// 2. Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// 3. Make the error messages show the values of the arguments.

// 4. Refactor the error messages into their own function, 
//    have the other functions use it for error messaging.

// PART 2

// 1. Refactor each function to return the result, removing the echo.

// 2. Validate divide by 0 errors, return FALSE if divide by 0 is attempted.

function error($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return true;
	} else {
		echo "Error! \$a and/or \$b was not a number!\n";
		return false;
	}
}

function add($a, $b) {
	if (error($a, $b)) {
		return $a + $b . PHP_EOL;
	}
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
		return $a - $b . PHP_EOL;
	} else {
		error($a, $b);
	}
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	return $a * $b . PHP_EOL;
} 	else {
		error($a, $b);
}
}

function divide($a, $b) {
	if ($b == 0){
    	return false;
} 	elseif (is_numeric($a) && is_numeric($b)) {
		return $a / $b . PHP_EOL;
} 	else {
 		error($a, $b);
}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		return $a % $b . PHP_EOL;
} 	else {
		error($a, $b);
}
}
 
echo add(1, 7);
echo subtract(10, 4);
echo multiply('banana', 14);
echo divide(9, 0);
echo modulus(13, 4);

