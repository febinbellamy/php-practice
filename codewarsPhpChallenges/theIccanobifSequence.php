<?php
/* 
https://www.codewars.com/kata/58049aa58f5e65b6da0000ef

Your task is to create an array of size n with the values of the Fibonnaci sequence, and reverse the order in which the sequence is displayed.

For example: [1, 1, 2, 3, 5] would become [5, 3, 2, 1, 1]

You can assume that n will always be a positive integer between and including, 1 and 64.

Note: If you receive a server timeout - Check your code and re-run the tests.
*/
function iccanobif($n) {
    if ($n === 1) {
      return [1];
    }
    $fibonacciSequence = [1, 1];
    $count = 2;
    while($count < $n) {
      $newNum = $fibonacciSequence[0] + $fibonacciSequence[1];
      array_unshift($fibonacciSequence, $newNum);
      $count++;
    }
    return $fibonacciSequence;
  }
  