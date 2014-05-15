<?php


// 1.Validate all the arguments, and display an error if the input is not numeric.

// 2. Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// 3. Make the error messages show the values of the arguments.

// 4. Refactor the error messages into their own function, 
//    have the other functions use it for error messaging.




function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b.PHP_EOL;
	} else {
		echo '$a and $b should be numeric, yo!'.PHP_EOL;
	}
}
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
		echo $a - $b.PHP_EOL;
	} else {
		echo '$a and $b should be numeric, yo!'.PHP_EOL;
	}
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    echo $a * $b.PHP_EOL;
} else {
	echo '$a and $b should be numeric, yo!'.PHP_EOL;
}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    echo $a / $b.PHP_EOL;
} else {
	echo '$a and $b should be numeric, yo!'.PHP_EOL;
}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
	echo $a % $b.PHP_EOL;
} else {
	echo '$a and $b should be numeric, yo!'.PHP_EOL;
}
}

add(1, 'dog');
subtract(10, 4);
multiply(true, 'omar');
divide(10, 3);
modulus(null, 4);
