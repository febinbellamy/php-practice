<?php

/* 
https://exercism.org/tracks/php/exercises/pangram

Your task is to figure out if a sentence is a pangram.

A pangram is a sentence using every letter of the alphabet at least once. It is case insensitive, so it doesn't matter if a letter is lower-case (e.g. k) or upper-case (e.g. K).

For this exercise we only use the basic letters used in the English alphabet: a to z.
*/


function isPangram(string $string): bool
{
    $alphabetCounter = [];
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    for($i = 0; $i < strlen($alphabet); $i++) {
        $currentChar = $alphabet[$i];
        $alphabetCounter[$currentChar] = 0;
    }
    for($j = 0; $j < strlen($string); $j++) {
        $currentChar = strtolower($string[$j]);
        if (array_key_exists($currentChar, $alphabetCounter)) {
            $alphabetCounter[$currentChar]++;
        }
    }
    
    foreach($alphabetCounter as $key => $value) {
        if ($value === 0) {
            return false;
        }
    }
    return true;
}
