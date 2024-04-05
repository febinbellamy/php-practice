<?php 

/* 
https://www.codewars.com/kata/57e8f757085f7c7d6300009a

Finding your seat on a plane is never fun, particularly for a long haul flight... You arrive, realise again just how little leg room you get, and sort of climb into the seat covered in a pile of your own stuff.

To help confuse matters (although they claim in an effort to do the opposite) many airlines omit the letters 'I' and 'J' from their seat naming system.

the naming system consists of a number (in this case between 1-60) that denotes the section of the plane where the seat is (1-20 = front, 21-40 = middle, 40+ = back). This number is followed by a letter, A-K with the exclusions mentioned above.

Letters A-C denote seats on the left cluster, D-F the middle and G-K the right.

Given a seat number, your task is to return the seat location in the following format:
'2B' would return 'Front-Left'.

If the number is over 60, or the letter is not valid, return 'No Seat!!'.
*/
function planeSeat($a){
  $lettersAndSections = ["A" => "Left", "B" => "Left", "C" => "Left", "D" => "Middle", "E" => "Middle", "F" => "Middle", "G" => "Right", "H" => "Right", "I" => "Right", "J" => "Right", "K" => "Right"];
  $strLen = strlen($a);
  $number = $strLen === 2 ? (int)$a[0] : (int)substr($a, 0, 2);  
  $letter = $strLen === 2 ? $a[1] : $a[$strLen - 1];
  
  if ($letter === "I" || $letter === "J" || $number > 60 || !array_key_exists($letter, $lettersAndSections)) {
    return "No Seat!!";
  }
  
  $result = "";
  if ($number <= 20 && $number >= 1) {
    $result = "Front-"; 
  } else if ($number <= 40 && $number >= 21) {
    $result = "Middle-";
  } else if ($number >= 41 && $number <= 60) {
    $result = "Back-";
  } 

  return $result .= $lettersAndSections[$letter];
}