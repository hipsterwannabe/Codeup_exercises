<?php

//prompt user for starting and ending number
fwrite(STDOUT, "Hello, give me a beginning number."\n);
$start = fgets(STDIN);
fwrite(STDOUT, "Now, give me an ending number."\n);
$end = fgets(STDIN);

//display all numbers in between given numbers
for ($i=$start; $i < $end; $i++) { 
	echo {$i\n};
}

?>