<?php

/* 
https://www.codewars.com/kata/5a995c2aba1bb57f660001fd

Let's create some scrolling text!

Your task is to complete the function which takes a string, and returns an array with all possible rotations of the given string, in uppercase.

Example

scrollingText("codewars") should return:
[ "CODEWARS",
  "ODEWARSC",
  "DEWARSCO",
  "EWARSCOD",
  "WARSCODE",
  "ARSCODEW"
  "RSCODEWA",
  "SCODEWAR" ]

Good luck!
*/

function scrollingText($text) {
    $currentText = strtoupper($text);
    $result = [$currentText];
    $count = 1;
  
    while($count < strlen($currentText)) {
      $arrOfLetters = str_split($currentText);
      $removedFirstLetter = array_shift($arrOfLetters);
      $newWord = implode(array_slice($arrOfLetters, 0)) . $removedFirstLetter;
      $result[] = $newWord;
      $currentText = $newWord;
      $count++;
    }
    return $result;
}