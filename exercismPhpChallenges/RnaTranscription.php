<?php 
/* 
https://exercism.org/tracks/php/exercises/rna-transcription/

Your task is determine the RNA complement of a given DNA sequence.

Both DNA and RNA strands are a sequence of nucleotides.

The four nucleotides found in DNA are adenine (A), cytosine (C), guanine (G) and thymine (T).

The four nucleotides found in RNA are adenine (A), cytosine (C), guanine (G) and uracil (U).

Given a DNA strand, its transcribed RNA strand is formed by replacing each nucleotide with its complement:

G -> C
C -> G
T -> A
A -> U
*/
function toRna(string $dna): string
{
    $finalStr = "";
    $dnaRNAConversation = ["G" => "C", "C" => "G", "T" => "A", "A" => "U"];
    for ($i = 0; $i < strlen($dna); $i++) {
        $currentLetter = $dna[$i];
        $finalStr .= $dnaRNAConversation[$currentLetter];
    }
    return $finalStr;
}
