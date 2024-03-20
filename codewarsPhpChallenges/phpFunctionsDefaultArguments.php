<?php
/* 
Define the following functions.

multiply_with_defaults
This function should receive 2 optional arguments, $a and $b, which should both default to 1 if they are not provided. This function should return the product of the two numbers.

circle_area
This function should receive an optional argument $radius which should default to 1 if no argument is provided. It should return the area of a circle with radius $radius. Allowances will be made for minor floating point errors.

prank_replace
This function should receive 1 required argument followed by 2 optional arguments. The first (required) argument is a string $string in which we will perform our operation on. The second and third arguments are $match and $replacement which should default to "hello" and "goodbye" respectively. The function should then return a new string which is the original $string with all instances of $match replaced with $replacement. Below are some examples:
prank_replace("hello world"); // "goodbye world"
prank_replace("Hello this is the world", "Hello"); // "goodbye this is the world"
prank_replace("apples bananas dragonfruit bananas apples kiwi apples oranges", "apples", "pears"); 

https://www.codewars.com/kata/57d0fad6eca26073c3000023
*/

function multiply_with_defaults ($a=1, $b=1) {
    return $a * $b;
  }
  
  function circle_area ($radius=1) {
    return pi() * ($radius ** 2);
  }
  
  function prank_replace ($string, $match="hello", $replacement="goodbye") {
    echo $string, " <- string ", $match, " <- match ", $replacement, " <- replacement ";
    return str_replace($match, $replacement, $string);
  };
  