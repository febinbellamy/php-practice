<?php 

/* 
Define the following closures and store them into the variables as specified.

$hello_world - This variable should be assigned a closure that receives no arguments and returns the string "Hello World"
$person_description - This variable should be assigned a closure that receives three arguments in the order $name, $age and $occupation. It should return a string of the format "NAME_HERE is AGE_HERE years old and currently works as a(n) OCCUPATION_HERE" (N.B. The "a(n)" part of the string is literal - your function does not need to format the string according to whether the occupation starts with a vowel or a consonant)

https://www.codewars.com/kata/57d41c425dc38eefbc0001cf
*/

$hello_world = function () 
{
  return "Hello World";
};

$person_description = function ($name, $age, $occupation) 
{
  return "$name is $age years old and currently works as a(n) $occupation";
};