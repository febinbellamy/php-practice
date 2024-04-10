<?php

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