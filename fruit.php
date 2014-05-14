<?php
// Create array of fruits, write for and foreach loops that
// prints names of fruits

// Part 2- array of fruits with colors, print out both in a loop
$fruits = array(
	'apple' => ['color' => 'red'],
	'banana' => ['color' => 'yellow'],
	'grape' => ['color' =>'green'],
	'orange' => ['color' => 'orange']
);

// for ($i = 0; $i < count($fruits); $i++){
// 	fwrite(STDOUT, $fruit).PHP_EOL;
// }

// foreach ($fruits as $fruit => $details) {
// 	echo $fruit.PHP_EOL;
// }

foreach ($fruits as $fruit => $color) {
	echo $fruit ." is " . $color.PHP_EOL;
}



?>