<?php
/* 
https://www.codewars.com/kata/58dabca7ce77a12dbd00000f

Write a function that takes a number and returns highest power of 2 that evenly divides the number.

Examples:
for n =    123, should return  1
for n =    192, should return 64
for n = 132232, should return  8

Assume that: number is an integer within the range [1..10^18].
*/
function solution(int $n): int {
  // Your code here
  $highestPower = 1;
  $currentNum = 1;
  while($currentNum < $n) {
    $currentNum *= 2;
    if ($n % $currentNum === 0) {
      $highestPower = $currentNum;
    }
  }
  return $highestPower;
}