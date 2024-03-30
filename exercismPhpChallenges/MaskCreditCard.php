<?php
/*
https://exercism.org/tracks/php/exercises/mask-credit-card

Create a function maskify to mask digits of a credit card number with #.

Requirements:
Do not mask the first digit and the last four digits
Do not mask non-digit chars
Do not mask if the input is less than 6
Return '' when input is empty

Examples:
1234-5678-9012 converts to 1###-####-9012
123456789012 converts to 1#######9012 
*/

declare(strict_types=1);

function maskify(string $cc): string
{
    if (strlen($cc) < 6) {
        return $cc;
    } 
    $result = $cc[0];
    $lastFour = substr($cc, strlen($cc) - 4);
    for($i = 1; $i < strlen($cc) - 4; $i++) {
        $currentChar = $cc[$i];
        if ($currentChar === "-") {
            $result .= $currentChar;
        } else {
            $result .= "#";
        }
    }
    return $result . $lastFour;
}
