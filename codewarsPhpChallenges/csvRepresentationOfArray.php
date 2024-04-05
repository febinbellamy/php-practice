<?php 
/* 
https://www.codewars.com/kata/5a34af40e1ce0eb1f5000036

Create a function that returns the CSV representation of a two-dimensional numeric array.

Example:
input:
   [[ 0, 1, 2, 3, 4 ],
    [ 10,11,12,13,14 ],
    [ 20,21,22,23,24 ],
    [ 30,31,32,33,34 ]] 
    
output:
     '0,1,2,3,4\n'
    +'10,11,12,13,14\n'
    +'20,21,22,23,24\n'
    +'30,31,32,33,34'

Array's length > 2.

More details here: https://en.wikipedia.org/wiki/Comma-separated_values

Note: you shouldn't escape the \n, it should work as a new line.
*/
function toCsvText($array) {
    $result = "";
    
    for($i = 0; $i < count($array); $i++) {
      $currentArr = $array[$i];
      $currentRow = "";
      for($j = 0; $j < count($currentArr); $j++) {
        $currentNum = $currentArr[$j];
        $currentRow .= $currentNum;
        if ($j !== count($currentArr) - 1) {
          $currentRow .= ",";
        }
      }
      
      $result .= $currentRow;
      
      if ($i !== count($array) - 1) {
        $result .= "\\n";
      }
    }
    
    return $result;
  }