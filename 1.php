<?php
//----------------task Q
// you have an array of numbers. write a script to find minimum and maximum numbers
// in the array.

$array = [1, 2, 3, 4, 5, 6]; // array data

//built in functions
echo "built in functions <br>";
echo "maximum is " . max($array) . " <br>"; // maximum number
echo "minimum is " . min($array);   // minimum number
echo "<br> <hr>";

//own algorithm
echo "own algorithm <br>";
$var = $array[0];
for ($i = 0; $i < count($array); $i++) {
    if ($var < $array[$i]) {
        $var = $array[$i] . "<br>";               // maximum element
    }
}
echo "Max is $var";


for ($i = 0; $i < count($array); $i++) {
    if ($var > $array[$i]) {
        $var = $array[$i] . "<br>";               // minimum element
    }
}
echo "Min is $var";
