<?php
/* 
https://www.codewars.com/kata/571965ccdf7fdb10a00000ea

In this kata you must return a string value, where the first part is the sum of positive numbers and the second part is the number of negative numbers.

Knowing that the first '0' is negative, the second is positive, the third is negative, and so on...

For example:
sum_length([-1, 2, 3, 4, 0, 1, 0, -2, 0, -3]); // returns "10 5" (10 = 1 + 2 + 3 + 4 and 5 = 3 + 2 => 3 negatives numbers + second 0 as negative)
*/

function sum_length($arr) {
  // Your amazing code here! :D
  $negativeNumsCount = 0;
  $positiveNumsSum = 0;
  $zeroCount = 0;
  for($i = 0; $i < count($arr); $i++){
    $currentNum = $arr[$i];
    if ($currentNum > 0) {
      $positiveNumsSum += $currentNum;
    } elseif ($currentNum < 0) {
      $negativeNumsCount++;
    } elseif ($currentNum === 0) {
      if ($zeroCount % 2 === 0) {
        $negativeNumsCount++;
      } 
      $zeroCount++;
    }
  }
  return "$positiveNumsSum $negativeNumsCount";
}