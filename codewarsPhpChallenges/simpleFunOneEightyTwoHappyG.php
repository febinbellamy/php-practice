<?php
/*
https://www.codewars.com/kata/58bcd27b7288983803000002

Let's say that "g" is happy in the given string, if there is another "g" immediately to the right or to the left of it.

Find out if all "g"s in the given string are happy.

Example
For str = "gg0gg3gg0gg", the output should be true.

For str = "gog", the output should be false.

Input/Output
– [input] string str
A random string of lower case letters, numbers and spaces.

– [output] a boolean value
True if all "g"s are happy, false otherwise.
*/

function g_happy(string $str): bool {
  // Coding and coding ... 
  if (strlen($str) === 1) {
    return true;
  }
  for($i = 0; $i < strlen($str); $i++) {
    $currChar = $str[$i];
    if ($currChar === "g") {
      if ($i === strlen($str) - 1 && $str[$i - 1] !== "g") {
        return false;
      } elseif ($i === 0 && $str[$i + 1] !== "g") {
        return false;
      } elseif ($str[$i - 1] !== "g" && $str[$i + 1] !== "g") {
        return false;
      }
    }
  }
  return true;
}