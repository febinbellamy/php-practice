<?php
/* 
https://www.codewars.com/kata/57fb017d9610ce369a0006ac

Description:
Remove or add a exclamation mark at the end of words of the sentence. Words are separated by spaces in the sentence. That is: If a word has one ! at the end, remove it; If a word has no ! at the end, add a ! to the end; If there are more than one ! at the end of word, keep it.

Examples
"Hi!"            ---> "Hi"
"Hi! Hi!"        ---> "Hi Hi"
"Hi! Hi"         ---> "Hi Hi!"
"Hi! Hi Hi!!"    ---> "Hi Hi! Hi!!"
"!Hi! !Hi !Hi!!" ---> "!Hi !Hi! !Hi!!"
*/

function remove(string $s): string {
    // Coding and coding ... 
    $wordArray = explode(" ", $s);
    $result = [];
  
    for($i = 0; $i < count($wordArray); $i++) {   
      $currentWord = $wordArray[$i];
      $lastIndex = strlen($currentWord) - 1;
      $secondToLastIndex = strlen($currentWord) - 2;
      if ( $currentWord[$lastIndex] === "!" && $currentWord[$secondToLastIndex] === "!" ) {
        $result[] = $currentWord;
      } else if ($currentWord[$lastIndex] === "!") {
        $result[] = substr( $currentWord, 0, $lastIndex);
      } else {
        $result[] = $currentWord . "!";
      }
    }
    return implode(" ", $result);
  }