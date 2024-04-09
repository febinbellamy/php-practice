<?php
/* 
https://www.codewars.com/kata/57fafd0ed80daac48800019f

Description:
Move all exclamation marks to the end of the sentence

Examples
"Hi!"          ---> "Hi!"
"Hi! Hi!"      ---> "Hi Hi!!"
"Hi! Hi! Hi!"  ---> "Hi Hi Hi!!!"
"Hi! !Hi Hi!"  ---> "Hi Hi Hi!!!"
"Hi! Hi!! Hi!" ---> "Hi Hi Hi!!!!"
*/

function remove(string $s): string {
    // Coding and coding ...     
    $result = "";
    $counter = 0;
    for($i = 0; $i < strlen($s); $i++) {
      $currentChar = $s[$i];
      if ($currentChar !== "!") {
        $result .= $currentChar;
      } else {
        $counter++;
      }
    }
    $result .= str_repeat("!", $counter);
    return $result;
}