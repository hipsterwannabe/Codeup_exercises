<?php

$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

if(($x < $y) and ($y < $z)){
	echo "$x < $y < $z\n";
}
// if $x is greater than 0 OR less than 10, echo the result as a sentence "$x is greater than 0 OR less than 10".

if (($x > 0) or ($x < 10)){
	echo "$x is greater than 0 OR less than 10\n";
}

// repeat the if statement for $y and $z.
 if (($y > 0) or ($y < 10)){
 	echo "$y is greater than 0 OR less than 10\n";
 }

 if (($z > 0) or ($z < 10)){
 	echo "$z is greater than OR less than 10\n";
 }

// If $x is greater than 0 AND less than 10, echo the result as a sentence "$x is greater than 0 AND less than 10".

if (($x > 0) && ($x < 10)){
	echo "$x is greater than 0 AND less than 10\n";
}
// repeat the if statement for $y and $z.

if (($y > 0) && ($y < 10)){
	echo "$y is greater than 0 AND less than 10\n";
}

if (($z > 0) && ($z < 10)){
	echo "$y is greater than 0 AND less than 10\n";
}
?>