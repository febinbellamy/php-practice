<?php
/* 
https://www.codewars.com/kata/57faf7275c991027af000679

Remove n exclamation marks in the sentence from left to right. n is positive integer.

Examples
remove("Hi!",1) === "Hi"
remove("Hi!",100) === "Hi"
remove("Hi!!!",1) === "Hi!!"
remove("Hi!!!",100) === "Hi"
remove("!Hi",1) === "Hi"
remove("!Hi!",1) === "Hi!"
remove("!Hi!",100) === "Hi"
remove("!!!Hi !!hi!!! !hi",1) === "!!Hi !!hi!!! !hi"
remove("!!!Hi !!hi!!! !hi",3) === "Hi !!hi!!! !hi"
remove("!!!Hi !!hi!!! !hi",5) === "Hi hi!!! !hi"
remove("!!!Hi !!hi!!! !hi",100) === "Hi hi hi"
*/

function remove(string $s, int $n): string {
    $removedCount = 0;
    $result = "";
    for($i = 0; $i < strlen($s); $i++) {
      $currentChar = $s[$i];
      if ($currentChar === "!" && $removedCount !== $n) {
        $removedCount++;
      } else {
        $result .= $currentChar;
      }
    }
    return $result;
}