<?php

function add($a, $b) {
    echo $a + $b.PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b.PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b.PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b.PHP_EOL;
}

function modulus($a, $b) {
	echo $a % $b.PHP_EOL;
}

add(3,9);
subtract(10,2.4);
multiply(7,6);
divide(100,7);
modulus(98,11);

?>