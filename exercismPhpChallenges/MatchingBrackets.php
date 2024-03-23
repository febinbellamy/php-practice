<?php 
/*
https://exercism.org/tracks/php/exercises/matching-brackets/

Given a string containing brackets [], braces {}, parentheses (), or any combination thereof, verify that any and all pairs are matched and nested correctly.
*/

function brackets_match(string $input): bool
{
    $stack = [];
    $pairs = [ "}" => "{",  ")" => "(",  "]" => "[" ];
    
    for($i = 0; $i < strlen($input); $i++) {
        $currentChar = $input[$i];
        if ($currentChar === "(" || $currentChar === "[" || $currentChar === "{") {
            $stack[] = $currentChar;
        } elseif ($currentChar === ")" || $currentChar === "]" || $currentChar === "}") {
                               
            $lastIndex = count($stack) - 1;    
                               
            if ( $lastIndex >= 0 && $pairs[$currentChar] === $stack[$lastIndex] ) {
                array_pop($stack);
            } else {
                return false;
            }
        }
    }
    
    if ($stack) {
        return false;
    } else {
        return true;
    }
}
