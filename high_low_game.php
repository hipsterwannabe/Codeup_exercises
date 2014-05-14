<?php

// Game picks number from 1 to 100.
$number = rand(1,100);
// User is prompted to guess a number.
fwrite(STDOUT, 'Guess a number from 1 to 100!');
$guess = (int) fgets(STDIN);

// If user guesses number, game ends with winning message
while ($guess != $number){
	if ($guess > $number){
		fwrite(STDOUT, 'Nice try, but go lower!');
		$guess = (int) fgets(STDIN);
	};
} else {
	if ($guess < $number){
		fwrite(STDOUT, 'Nice try, but go higher!');
		$guess = (int) fgets(STDIN);
	}
}

fwrite(STDOUT, 'YOU WIN!!!11!');




?>