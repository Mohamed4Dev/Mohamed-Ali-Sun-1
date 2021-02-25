<?php
//----------------task Q
// you have a variable that contains any digit from 0 to 9. write a script to display the
// english equivalent of this number.
// For example:
// digit = 3 → three

// match 
$number = 5;
$englishForm = match ($number) {
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    default => 'zero'
};
echo $englishForm; // output
