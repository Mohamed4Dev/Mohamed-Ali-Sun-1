<?php
//----------------task Q
// write a script that removes any duplicates from an array.

$array = [1,2,3,5,6,5,5,7,6]; // original data
print_r($array);

echo "<br>";

$filteredArray =array_unique($array); // duplicates removed data
print_r($filteredArray);

