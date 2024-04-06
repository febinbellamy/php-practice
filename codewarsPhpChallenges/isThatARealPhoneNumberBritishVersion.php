<?php

/* 
https://www.codewars.com/kata/581a52d305fe7756720002eb

https://www.codewars.com/kata/581a52d305fe7756720002eb
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
  