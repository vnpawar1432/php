<?php
// string function in php

$name = "vaibhav";
echo $name;
echo "<br>";

// strlen() function it shows length of string
$name1 = "vaibhav is good in php";
echo $name1;
echo "<br>";
echo strlen($name1);
echo "<br>";
echo "length of string is ".strlen($name1);  // .(dot) op is using for concaneting in php
echo "<br>";

// str_word_count() function is used to count word in string

echo str_word_count($name1);
echo "<br>";

// strrev() function used to rev a string

echo strrev($name1);
echo "<br>";

// strpos() function is used to find position of word in string count from 0 index

echo strpos($name1, "good");
echo "<br>";

// str_replace() function is used to replce word from string

echo str_replace("vaibhav","vinayak",$name1);
echo "<br>";

// str_repeat() fuction is used to reapeat a string

echo str_repeat($name1,3);
echo "<br>";

//rtrim() is used for trim white spaces from right side of string

echo "<pre>";
$name2 = "  vaibhav is good in java   ";
echo $name2;
echo "<br>";
echo rtrim($name2);
echo "<br>";

//ltrim() fuction is used to trim white space from left side of string

echo ltrim($name2);
echo "<br>";

echo "</pre>";

// str_shuffle() fuction is used to suffle character from string
echo str_shuffle($name1);
echo "<br>";


?>