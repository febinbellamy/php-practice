<?php 

/*
Task

Define a function multiple_closures() which accepts a number $a as its only argument and returns a closure which accepts two numbers $b and $c which then returns another closure which accepts two numbers $d and $e and returns the value of the expression $a + $b * $c - $d / $e. For example:

echo multiple_closures(1)(1, 1)(1, 1); // 1 (= 1 + 1 * 1 - 1 / 1)
echo multiple_closures(1)(2, 3)(4, 5); // 6.2 (= 1 + 2 * 3 - 4 / 5)
echo multiple_closures(3)(5, 8)(21, 99); // 42.78787879 (= 3 + 5 * 8 - 21 / 99)

You may assume $e is never equal to 0. Additionally, in the test cases, allowances will be made for floating point errors.

https://www.codewars.com/kata/57dbd9d68d7f5a785f00000f
*/


function multiple_closures($a) 
{
  return $second_func = function($b, $c) use ($a) {
    return $third_func = function($d, $e) use ($a, $b, $c) {
      return $a + $b * $c - $d / $e;
    };
  };
}