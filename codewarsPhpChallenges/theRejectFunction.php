<?php

/* 
https://www.codewars.com/kata/52988f3f7edba9839c00037d

Implement a function which filters out array values which satisfy the given predicate.

reject([1, 2, 3, 4, 5, 6], function ($n) {return $n % 2 == 0;})  =>  [1, 3, 5]
*/

function reject($array, $predicate) {
  $rejectedElems = [];
  for($i = 0; $i < count($array); $i++) {
    if ($predicate($array[$i]) === false) {
      $rejectedElems[] = $array[$i];
    }
  }
  return $rejectedElems;
}