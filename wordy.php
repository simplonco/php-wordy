<?php

//
// This is only a SKELETON file for the "Hello World" exercise.
// It's been provided as a convenience to get you started writing code faster.
//
 function HammingDistance($x, $y) {
    $a1 = str_split($x);
    $a2 = str_split($y);
    $dh = 0;
    for ($i = 0; $i < count($a1); $i++)
        if($a1[$i] != $a2[$i]) $dh++;
    return $dh;
}

echo HammingDistance('GAGCCTACTAACGGGAT,CATCGTAATGACGGCCT');
  ?>
