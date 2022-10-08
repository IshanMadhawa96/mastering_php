<?php
/*
PHP 7 introduced two new CSPRNG functions. CSPRNG is an acronym for 
cryptographically secure pseudo-random number generator.
The first, random_bytes, generates an arbitrary length string of cryptographic 
random bytes that are suitable for cryptographic use, such as when generating salts, 
keys, or initialization vectors. The function accepts only one (length) parameter, 
representing the length of the random string that should be returned in bytes. 
It returns a string containing the requested number of cryptographically secure 
random bytes, or, optionally, it throws an exception if an appropriate source of 
randomness cannot be found

The following is an example of random_bytes usage:
$bytes = random_bytes(5);
The second, random_int, generates cryptographic random integers that are suitable 
for use where unbiased results are critical, such as when shuffling a deck of cards 
for a poker game. The function accepts two (min, max) parameters, representing 
the lowest value to be returned (must be PHP_INT_MIN or higher) and the highest 
value to be returned (must be less than or equal to PHP_INT_MAX). It returns a 
cryptographically secure random integer in the range min to max (inclusive).
The following is an example of random_int usage:
$int = random_int(1, 10);
$int = random_int(PHP_INT_MIN, 500);
$int = random_int(20, PHP_INT_MAX);
$int = random_int(PHP_INT_MIN, PHP_INT_MAX);

*/
echo "CSPRNG RANDOM GENERATOR IN PHP";
echo "<br>";
echo "RANDOM BYTES GENERATOR";
echo "<br>";
$randomNumber = random_bytes(5);
echo "<br>";
var_dump($randomNumber);
echo "<br>";
echo "RANDOM INTEGER GENERATOR";
echo "<br>";
$random_int = random_int(5,100);
echo "random integergenerator:-".$random_int;
echo "<br>";
echo "RANDOM INTEGER GENERATOR USING PHP MIN MAX";
echo "<br>";
$random_int_min = random_int(PHP_INT_MIN,500);
echo "random int min example:-".$random_int_min;
echo "<br>";
$random_int_max = random_int(10,PHP_INT_MAX);
echo "random int max example:-".$random_int_max;
echo "<br>";
$random_int_min_max = random_int(PHP_INT_MIN,PHP_INT_MAX);
echo "random int in max example:-".$random_int_min_max;