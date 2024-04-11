<?php

/* 
https://www.codewars.com/kata/58249d08b81f70a2fc0001a4

Given a number return the closest number to it that is divisible by 10.

Example input:
22
25
37

Expected output:
20
30
40
*/

function closest_multiple_10($n) {
  
    $closestNumLessThanN = $n;
    $closestNumGreaterThanN = $n;
    $countLess = 0;
    $countGreater = 0;
    
    while ($closestNumLessThanN % 10 !== 0) {
      $countLess++;
      $closestNumLessThanN--;
    }
    
    while ($closestNumGreaterThanN % 10 !== 0) {
      $countGreater++;
      $closestNumGreaterThanN++;
    }
  
    if ($countGreater <= $countLess) {
      return $closestNumGreaterThanN;
    } else {
      return $closestNumLessThanN;
    }
  }