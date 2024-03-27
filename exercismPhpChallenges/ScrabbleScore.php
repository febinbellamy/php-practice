<?php

/* 
https://exercism.org/tracks/php/exercises/scrabble-score/

Instructions
Given a word, compute the Scrabble score for that word.

Letter Values

You'll need these:
Letter                           Value
A, E, I, O, U, L, N, R, S, T       1
D, G                               2
B, C, M, P                         3
F, H, V, W, Y                      4
K                                  5
J, X                               8
Q, Z                               10

Examples
"cabbage" should be scored as worth 14 points:

3 points for C
1 point for A, twice
3 points for B, twice
2 points for G
1 point for E

And to total:
3 + 2*1 + 2*3 + 2 + 1
= 3 + 2 + 6 + 3
= 5 + 9
= 14

Extensions
– You can play a double or a triple letter.
– You can play a double or a triple word.
*/

function score(string $word): int
{
    $letterValues = [
        "a" => 1, "e" => 1, "i" => 1, "o" => 1, "u" => 1, "l" => 1, "n" => 1, "r" => 1, "s" => 1, "t" => 1, 
        "d" => 2, "g" => 2, "b" => 3, "c" => 3, "m" => 3, "p" => 3, "f" => 4, "h" => 4, "v" => 4, "w" => 4, 
        "y" => 4, "k" => 5, "j" => 8, "x" => 8, "q" => 10, "z" => 10
        ];

    $finalScore = 0;

    for($i = 0; $i < strlen($word); $i++) {
        $currentLetter = strtolower($word[$i]);
        if (array_key_exists($currentLetter, $letterValues)) {
            $finalScore += $letterValues[$currentLetter];
        }
    }
    return $finalScore;
    
}
