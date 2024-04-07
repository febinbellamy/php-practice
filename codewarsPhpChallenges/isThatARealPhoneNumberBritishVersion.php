<?php

/* 
https://www.codewars.com/kata/581a52d305fe7756720002eb

Congratulations! That Special Someone has given you their phone number.

But WAIT, is it a valid number?

Your task is to write a function that verifies whether a given string contains a valid British mobile (cell) phone number or not.

If valid, return 'In with a chance'.

If invalid, or if you're given an empty string, return 'Plenty more fish in the sea'.

A number can be valid in the following ways:

Here in the UK mobile numbers begin with '07' followed by 9 other digits, e.g. '07454876120'.

Sometimes the number is preceded by the country code, the prefix '+44', which replaces the '0' in ‘07’, e.g. '+447454876120'.

And sometimes you will find numbers with dashes in-between digits or on either side, e.g. '+44--745---487-6120' or '-074-54-87-61-20-'. As you can see, dashes may be consecutive.

Good Luck Romeo/Juliette!
*/

function validateNumber($str){
    $numberOfDigits = 0;
    $firstTwoDigits = "";
    
  
    if (!is_string($str)) {
      return "Plenty more fish in the sea"; 
    }
      
    for($i = 0; $i < strlen($str); $i++) {
      $currentChar = $str[$i];
      
      if (is_numeric($currentChar)) {
        if ($numberOfDigits < 2) {
          $firstTwoDigits .= $currentChar;
        }  
        $numberOfDigits++;
      }
    }
    
    if ($firstTwoDigits === "44") 
      if ($str[0] !== "+" || $numberOfDigits !== 12) {
        return "Plenty more fish in the sea";
    } 
    
    if ($firstTwoDigits !== "07" && $firstTwoDigits !== "44" || ($firstTwoDigits === "07" && $numberOfDigits !== 11)) {
      return "Plenty more fish in the sea";
    }
  
    return "In with a chance";
  }
  