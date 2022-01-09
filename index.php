<?php

// test implode with int
$myArray = [1,2,3,4,5];
$myString = implode (', ',$myArray);
echo $myString;

// str_pad() test

$textToComplete = "Mon texte à complété";
echo "<br><br>";
echo str_pad($textToComplete, 29, '--', STR_PAD_BOTH);
echo "<br><br>";
echo str_pad($textToComplete, 25, '**', STR_PAD_LEFT);