<?php
/* 
https://exercism.org/tracks/php/exercises/language-list

Instructions
In this exercise you need to implement some functions to manipulate a list of programming languages.

Task 1:
Define the language_list function that takes no arguments and returns an empty list.

<?php
language_list();
// => []


Task 2:
Modify the language_list function, so it takes a variadic argument of languages (strings). It should return the resulting list with the languages in the list.

<?php
$language_list = language_list();
// => []
$language_list = language_list("Clojure", "PHP");
// => ["Clojure", "PHP"]
$language_list = language_list("PHP", "Haskell", "Java", "C++", "Rust")
// => ["PHP", "Haskell", "Java", "C++", "Rust"]


Task 3:
Define the add_to_language_list function that takes 2 arguments, an array of languages, and the new language.

<?php
$language_list = language_list();
// => []
$language_list = add_to_language_list($language_list, "Clojure");
// => ["Clojure"]


Task 4:
Define the prune_language_list function to remove the first language from the array of languages.

<?php
$language_list = language_list("PHP");
// => ["PHP"]
$language_list = prune_language_list($language_list);
// => []


Task 5:
Define the current_language function that takes 1 argument (a language list). It should return the first language in the list. Assume the list will always have at least one item.

<?php
$language_list = language_list("PHP", "Prolog");
// => ["PHP", "Prolog"]
$first = current_language($language_list);
// => "PHP"


Task 6:
Define the language_list_length function that takes 1 argument (a language list). It should return the number of languages in the list.

<?php
$language_list = language_list("PHP", "Prolog", "Wren");
// => ["PHP", "Prolog", "Wren"]
language_list_length($language_list);
// => 3 
*/
function language_list(...$args)
{
    return $args;
}


function add_to_language_list( $arrOfLanguages, $newLanguage) 
{
    $arrOfLanguages[] = $newLanguage;
    return $arrOfLanguages;
}

function prune_language_list( $arrOfLanguages ) 
{
    array_shift( $arrOfLanguages );
    return $arrOfLanguages;
}

function current_language( $arrOfLanguages ) 
{
    return $arrOfLanguages[0];
}

function language_list_length( $arrOfLanguages ) 
{
    return count($arrOfLanguages);
}