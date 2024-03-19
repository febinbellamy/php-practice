<?php 

// https://www.codewars.com/kata/57dbd9d68d7f5a785f00000f

function multiple_closures($a) 
{
  return $second_func = function($b, $c) use ($a) {
    return $third_func = function($d, $e) use ($a, $b, $c) {
      return $a + $b * $c - $d / $e;
    };
  };
}