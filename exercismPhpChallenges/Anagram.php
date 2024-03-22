<?php
/* 
https://exercism.org/tracks/php/exercises/anagram/

Instructions
An anagram is a rearrangement of letters to form a new word. Given a word and a list of candidates, select the sublist of anagrams of the given word.

Given "listen" and a list of candidates like "enlists" "google" "inlets" "banana" the program should return a list containing "inlets".

The skipped tests near the bottom of the anagram_test.php are Stretch Goals, they are optional. They require the usage of mb_string functions, which aren't installed by default with every version of PHP.
*/

function detectAnagrams(string $word, array $anagrams): array
{
    $wordLower = strtolower($word);
    $arr = str_split( $wordLower );
    sort( $arr );
    $sortedWord = implode('', $arr);
    $result = [];
    
    for($i = 0; $i < count($anagrams); $i++) {
        $currentWord = $anagrams[$i];
        $anagramLower = strtolower($currentWord);
        if ($anagramLower === $wordLower) {
            continue;
        }
        $arrOfChars = str_split( $anagramLower );
        sort( $arrOfChars );
        $sortedString = implode('', $arrOfChars);
        
        if ($sortedWord === $sortedString) {
            $result[] = $currentWord;
        }
    }
    return $result;
}
