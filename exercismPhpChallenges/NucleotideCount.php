<?php
/* 
https://exercism.org/tracks/php/exercises/nucleotide-count

Each of us inherits from our biological parents a set of chemical instructions known as DNA that influence how our bodies are constructed. All known life depends on DNA!

Note: You do not need to understand anything about nucleotides or DNA to complete this exercise.

DNA is a long chain of other chemicals and the most important are the four nucleotides, adenine, cytosine, guanine and thymine. A single DNA chain can contain billions of these four nucleotides and the order in which they occur is important! We call the order of these nucleotides in a bit of DNA a "DNA sequence".

We represent a DNA sequence as an ordered collection of these four nucleotides and a common way to do that is with a string of characters such as "ATTACG" for a DNA sequence of 6 nucleotides. 'A' for adenine, 'C' for cytosine, 'G' for guanine, and 'T' for thymine.

Given a string representing a DNA sequence, count how many of each nucleotide is present. If the string contains characters that aren't A, C, G, or T then it is invalid and you should signal an error.

For example:
"GATTACA" -> 'A': 3, 'C': 1, 'G': 1, 'T': 2
"INVALID" -> error
*/

function nucleotideCount(string $input): array
{
    $freqCounter = ["a" => 0, "c" => 0, "t" => 0, "g" => 0];
    $allowedCharacters = "acgt";
    
    for($i = 0; $i < strlen($input); $i++) {
        
        $currentChar = strtolower( $input[$i] );
        
        if (strpos( $allowedCharacters, $currentChar ) === false) {
            throw new Exception("Err!");
        } else {
            $freqCounter[$currentChar] += 1; 
        }
    }
    foreach($freqCounter as $key=>$value) {
        if ($value === 0) {
            return $freqCounter;
        }
    }
    return $freqCounter;
}
