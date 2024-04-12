<?php

/* 
https://www.codewars.com/kata/577d5ce442a8d81e790002b2

Celebrities love to call their children quirky names. The latest trend for baby names is the 'last letter trend'. The rules of the trend are as follows: the first letter of a child's name should be the same as the last letter of their older sibling. For example:

Suri (1st child), Ireland (2nd child), Diva (3rd child), Aleph (4th child)

And so on...

Create a function validName which accepts an array of names. It should return "Congratulations, your baby names are compatible!" if all of the names follow the rule. It should return "Back to the drawing board, your baby names are not compatible." if all of the names do not follow the rule.

If a couple only has one child return "Congratulations, you can choose any name you like!"

If the array is empty return "You must test at least one name."

Notes:
Names may be hyphenated or two words e.g. Blue Ivy or Jean-Paul
Names will not include any other characters apart from letters, hyphens or spaces.
*/

function valid_name($array) {
  // Your code here
  if (!$array) {
    return "You must test at least one name.";
  } elseif (count($array) === 1) {
    return "Congratulations, you can choose any name you like!";
  } 
  for($i = 0; $i < count($array) - 1; $i++) {
    $currentName = $array[$i];
    $nextName = $array[$i + 1];
    $lastLetterCurrentName = strtoupper($currentName[strlen($currentName) - 1]);
    $firstLetterNextName = strtoupper($nextName[0]);
    if ($lastLetterCurrentName !== $firstLetterNextName) {
      return "Back to the drawing board, your baby names are not compatible.";
    }
  }
  return "Congratulations, your baby names are compatible!";
}