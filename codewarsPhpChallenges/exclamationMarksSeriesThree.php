<?php

/* 
https://www.codewars.com/kata/57faefc42b531482d5000123

Remove all exclamation marks from sentence except at the end.

Examples
"Hi!"     ---> "Hi!"
"Hi!!!"   ---> "Hi!!!"
"!Hi"     ---> "Hi"
"!Hi!"    ---> "Hi!"
"Hi! Hi!" ---> "Hi Hi!"
"Hi"      ---> "Hi"
*/

function remove(string $s): string {
    $visitedOtherChar = false;
    $result = [];
    for($i = strlen($s) - 1; $i >= 0; $i--) {
      $currentChar = $s[$i];
      if ($currentChar === "!" && !$visitedOtherChar) {
        array_unshift($result, $currentChar);
      } elseif($currentChar !== "!") {
        $visitedOtherChar = true;
        array_unshift($result, $currentChar);
      }
    }
    return implode("", $result);
}