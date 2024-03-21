<?php 

/* 
https://exercism.org/tracks/php/exercises/reverse-string

Introduction
Reversing strings (reading them from right to left, rather than from left to right) is a surprisingly common task in programming.

For example, in bioinformatics, reversing the sequence of DNA or RNA strings is often important for various analyses, such as finding complementary strands or identifying palindromic sequences that have biological significance.

Instructions
Your task is to reverse a given string.

Some examples:
Turn "stressed" into "desserts".
Turn "strops" into "sports".
Turn "racecar" into "racecar".
*/
function reverseString(string $text): string
{
    return strrev($text);
}
