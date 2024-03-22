<?php
/* 
https://exercism.org/tracks/php/exercises/accumulate/

Implement the accumulate operation, which, given a collection and an operation to perform on each element of the collection, returns a new collection containing the result of applying that operation to each element of the input collection.

Given the collection of numbers:
1, 2, 3, 4, 5

And the operation:
square a number (x => x * x)

Your code should be able to produce the collection of squares:
1, 4, 9, 16, 25

Check out the test suite to see the expected function signature.

Restrictions
Keep your hands off that collect/map/fmap/whatchamacallit functionality provided by your standard library! Solve this one yourself using other basic tools instead.
*/

function accumulate(array $input, callable $accumulator): array
{
    $result = [];
    for ($i = 0; $i < count($input); $i++) {
        $currentElem = $input[$i];
        $result[] = $accumulator($currentElem);
    }
    return $result;
}
