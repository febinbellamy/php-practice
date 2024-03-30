<?php
/* 
https://exercism.org/tracks/php/exercises/collatz-conjecture

Instructions
The Collatz Conjecture or 3x+1 problem can be summarized as follows:

Take any positive integer n. If n is even, divide n by 2 to get n / 2. If n is odd, multiply n by 3 and add 1 to get 3n + 1. Repeat the process indefinitely. The conjecture states that no matter which number you start with, you will always reach 1 eventually.

Given a number n, return the number of steps required to reach 1.

Examples
Starting with n = 12, the steps would be as follows:
12
6
3
10
5
16
8
4
2
1

Resulting in 9 steps. So for input n = 12, the return value would be 9.
*/

declare(strict_types=1);
function steps(int $number): int
{
    $collatzCounter = 0;
    $currentNum = $number;
    if ($number <= 0) {
        throw new InvalidArgumentException('Only positive numbers are allowed');
    } 
    while($currentNum !== 1) {
        if ($currentNum % 2 === 0) {
            $currentNum = $currentNum / 2;
        } else {
            $currentNum = ($currentNum * 3) + 1;
        }
        $collatzCounter++;
    }
    return $collatzCounter;
}