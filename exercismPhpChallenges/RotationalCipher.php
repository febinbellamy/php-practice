<?php

/* 
https://exercism.org/tracks/php/exercises/rotational-cipher

Create an implementation of the rotational cipher, also sometimes called the Caesar cipher.

The Caesar cipher is a simple shift cipher that relies on transposing all the letters in the alphabet using an integer key between 0 and 26. Using a key of 0 or 26 will always yield the same output due to modular arithmetic. The letter is shifted for as many values as the value of the key.

The general notation for rotational ciphers is ROT + <key>. The most commonly used rotational cipher is ROT13.

A ROT13 on the Latin alphabet would be as follows:
Plain:  abcdefghijklmnopqrstuvwxyz
Cipher: nopqrstuvwxyzabcdefghijklm

It is stronger than the Atbash cipher because it has 27 possible keys, and 25 usable keys.

Ciphertext is written out in the same formatting as the input including spaces and punctuation.

Examples
ROT5 omg gives trl
ROT0 c gives c
ROT26 Cool gives Cool
ROT13 The quick brown fox jumps over the lazy dog. gives Gur dhvpx oebja sbk whzcf bire gur ynml qbt.
ROT13 Gur dhvpx oebja sbk whzcf bire gur ynml qbt. gives The quick brown fox jumps over the lazy dog.

Note
Do not use PHP functions like str_rot13() to solve this exercise! Only use basic string and character manipulation functions.
*/

class RotationalCipher
{
    public function rotate(string $text, int $shift): string
    {
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $result = "";
        for($i = 0; $i < strlen($text); $i++) {
            $currentLetter = $text[$i];
            if (ctype_alpha($currentLetter)) {
                $currentIndexOfLetter = strpos($alphabet, strtolower($currentLetter));
                $newIndex = ($currentIndexOfLetter + $shift) % 26;
                $newLetter = ctype_upper($currentLetter) ? strtoupper($alphabet[$newIndex]) : $alphabet[$newIndex];
                echo "newLetter -> ", $newLetter;
                $result .= $newLetter;
            } else {
                $result .= $currentLetter;
            }
        }
        return $result;
    }
}
