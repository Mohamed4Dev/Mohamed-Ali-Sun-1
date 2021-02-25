<?php
//----------------task Q
// trace the code & discuss of each statement of value of x and y

$x = 3;
$y = $x++; // y=3  x=4
$y += ++$x; // y=8 x=5
// before enter if statement y=8 and x=5
if ($y == 7) {
    $x++;
    echo $x . "<br>"; // not satisfied 
} else if ($y == 8) {
    $x--;
    echo $x . "<br>"; // satidfied x=4
} else if ($y == 9) {
    $x += 2;
    echo $x . "<br>"; // not satisfied 
} else {
    $x = 0;
    echo $x . "<br>"; // not satisfied 
}
