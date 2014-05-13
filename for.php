<?php

//prompt user for starting and ending number
fwrite(STDOUT, "Hello, give me a beginning number.\n");
$start = trim(fgets(STDIN));
fwrite(STDOUT, "Now, give me an ending number.\n");
$end = trim(fgets(STDIN));

// check to see if entries are valid integers, are not equal, and are in correct order
// error msgs if any errors
if (!is_numeric($start) || !is_numeric($end)) {
	echo "Please enter two integers.\n";
	exit(1);
} else {
	if ($start == $end){
		echo "Please enter two different integers.\n";
		exit(1);
	} else {
		if ($end < $start);{
			echo "Please make sure the second number is less than the first.\n";
		}
	}
} 


// display all numbers in between given numbers
for ($i = $start; $i <= $end; $i++) { 
	echo "$i\n";
}

?>