<?php
/*
https://exercism.org/tracks/php/exercises/atbash-cipher/

Create an implementation of the atbash cipher, an ancient encryption system created in the Middle East.

The Atbash cipher is a simple substitution cipher that relies on transposing all the letters in the alphabet such that the resulting alphabet is backwards. The first letter is replaced with the last letter, the second with the second-last, and so on.

An Atbash cipher for the Latin alphabet would be as follows:
Plain:  abcdefghijklmnopqrstuvwxyz
Cipher: zyxwvutsrqponmlkjihgfedcba

It is a very weak cipher because it only has one possible key, and it is a simple monoalphabetic substitution cipher. However, this may not have been an issue in the cipher's time.

Ciphertext is written out in groups of fixed length, the traditional group size being 5 letters, and punctuation is excluded. This is to make it harder to guess things based on word boundaries.

Examples
Encoding test gives gvhg
Decoding gvhg gives test
Decoding gsvjf rxpyi ldmul cqfnk hlevi gsvoz abwlt gives thequickbrownfoxjumpsoverthelazydog
*/

function encode(string $text): string
{   
    $alphabetBackwards = "zyxwvutsrqponmlkjihgfedcba";
    $consecutiveLetterCount = 0;

    $result = "";
    for($i = 0; $i < strlen($text); $i++) {
        $currLetter = strtolower(($text[$i]));
        
        if (is_numeric($currLetter)) {
            $result .= $currLetter;
             if ($consecutiveLetterCount === 5) {
                $result .= " ";
                $consecutiveLetterCount = 0;
            }
            $consecutiveLetterCount++;
        } else if (ctype_alpha($currLetter)) {
            $ASCIICode = ord($currLetter);
            $index = $ASCIICode - 97;
            if ($consecutiveLetterCount === 5) {
                $result .= " ";
                $consecutiveLetterCount = 0;
            }
            $consecutiveLetterCount++;
            $result .= $alphabetBackwards[$index];
        }
    }
    return $result;
}