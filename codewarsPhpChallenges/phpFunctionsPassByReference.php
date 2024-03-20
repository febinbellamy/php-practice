<?php
/*
Task

Define and implement the following functions:
double - This function should receive a number $n which should be passed into the function by reference. The function should then double the value of $n and store this (new) value in $n. No return value is necessary.

halve - This function should receive a number $n which should again be passed in by reference. Inside the function, $n should be halved. No return value is necessary.

enlarge - This function should receive two arguments, the first argument being $x which should be passed in by reference, and the second argument being $n which should be passed in by value. Both arguments are expected to be numbers. $x should then be enlarged by a factor of $n in the function. No return value is necessary.

https://www.codewars.com/kata/57d29627c98a52d1630009c0
*/
function double(&$n) 
{
  $n *= 2;
}

function halve(&$n) 
{
  $n /= 2; 
}

function enlarge(&$x, $n) 
{
  $x *= $n;
}