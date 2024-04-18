<?php

/* 
https://www.codewars.com/kata/57029e77005264a3b9000eb5

The notorious Captain Schneider has given you a very straight forward mission. Any data that comes through the system make sure that only non-special characters see the light of day.

Create a function that given a string, retains only the letters A-Z (upper and lowercase), 0-9 digits, and whitespace characters. Also, returns "Not a string!" if the entry type is not a string.
*/

function nothing_special($s): string {
  var_dump($s);
  if (!is_string($s)) {
    return "Not a string!";
  }
  $result = "";
  for($i = 0; $i < strlen($s); $i++) {
    $currentChar = $s[$i];
    if (ctype_space($currentChar) || ctype_alnum($currentChar)) {
      $result .= $currentChar;
    }
  }
  return $result;
}