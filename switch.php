<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('7');
// ^ This is a PHP function

// switch($day_of_week) {
//     case 1:
//         // Output Monday
//     	echo "Monday\n";
//     	break;
//     case 2:
//         // Output Tuesday
//     	echo "Tuesday\n";
//     	break;
//     case 3:
//     	echo "Wednesday\n";
//     	break;
//     // etc through day 7
//     case 4:
//     	echo "Thursday\n";
//     	break;
//     case 5:
//     	echo "Friday\n";
// 		break;
// 	case 6:
// 		echo "Saturday\n";
// 		break;
// 	case 7:
// 		echo "Sunday\n";
// 		break;

// Test and verify the results before proceeding by creating 
// a matching if block. The output should be identical.
if ($day_of_week == 1){
	echo "Just another Manic Monday\n";
} elseif ($day_of_week == 2){
	echo "Tuesday (wish it were a Sunday)\n";
} elseif ($day_of_week == 3){
	echo "Wednesday (cause that's my fun day)\n";
} elseif ($day_of_week == 4){
	echo "Thursday (my I don't have to run day)\n";
} elseif ($day_of_week == 5){
	echo "Friday (today is)\n";
} elseif ($day_of_week == 6){
	echo "Saturday (comes afterwards)\n";
} elseif ($day_of_week == 7){
	echo "Sunday (I don't want this weekend to end)\n";
}
