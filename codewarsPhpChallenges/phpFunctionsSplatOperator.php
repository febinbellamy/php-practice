<?php

/* 
Define the following functions, using the splat operator when necessary (you could technically use func_get_args() instead, but hey, why not use the more readable syntactical sugar provided by PHP 5.6.x+?).

sum_all - This function should receive a variable number of arguments, all of which are expected to be numbers, and return the sum of all the numbers.

ultimate_product - This function should also receive a variable number of arguments, all of which are expected to be numbers. It should return the product of all the numbers.

scale_sum - This function should receive a variable number of arguments. It should first sum up all of the arguments except the first argument and then enlarge the entire sum by the value specified by the first argument. For example, scale_sum(5, 2, 3, 4, 5) === 5 * (2 + 3 + 4 + 5) === 70

https://www.codewars.com/kata/57d3c6a043942a34d200015e
*/
function sum_all(...$args) {
  return array_sum($args);
}

function ultimate_product(...$args) {
  $product = array_reduce($args, function ($a, $c) {
    return $a * $c;
  }, 1);
  return $product;
}

function scale_sum(...$args) {
  $sum = array_sum( array_slice($args, 1) );
  echo $sum;
  return $args[0] * $sum;
}