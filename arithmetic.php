<?php


// 1.Validate all the arguments, and display an error if the input is not numeric.

// 2. Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// 3. Make the error messages show the values of the arguments.

// 4. Refactor the error messages into their own function, 
//    have the other functions use it for error messaging.


function error($a, $b){
	echo $a . ' and ' . $b  . ' should be numeric, yo!'.PHP_EOL;
}

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b.PHP_EOL;
	} else {
		error($a, $b);
	}
}
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
		echo $a - $b.PHP_EOL;
	} else {
		error($a, $b);
	}
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    echo $a * $b.PHP_EOL;
} else {
	error($a, $b);
}
}

function divide($a, $b) {
	if ($b == 0){
    echo 'You cannot divide by zero, yo!'.PHP_EOL;
} elseif (is_numeric($a) && is_numeric($b)) {
	echo $a / $b.PHP_EOL;
} else {
 	error($a, $b);
}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
	echo $a % $b.PHP_EOL;
} else {
	error($a, $b);
}
}


add(1, 7);
subtract(10, 4);
multiply('banana', 14);
divide(0, 9);
modulus(13, 4);
