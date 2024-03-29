<?php

/* 
https://exercism.org/tracks/php/exercises/bob

Bob is a lackadaisical teenager. In conversation, his responses are very limited.

Bob answers 'Sure.' if you ask him a question, such as "How are you?".

He answers 'Whoa, chill out!' if you YELL AT HIM (in all capitals).

He answers 'Calm down, I know what I'm doing!' if you yell a question at him.

He says 'Fine. Be that way!' if you address him without actually saying anything.

He answers 'Whatever.' to anything else.

Bob's conversational partner is a purist when it comes to written communication and always follows normal rules regarding sentence punctuation in English.

The commented tests at the bottom of the bob_test.php are Stretch Goals, they are optional. They may be easier to solve if you are using the mb_string functions, which aren't installed by default with every version of PHP.
*/

class Bob
{
    public function respondTo(string $str): string
    {
        $trimmedStr = trim($str);
        if($str === "" || $trimmedStr === "") {
            return "Fine. Be that way!";
        }  
        $charArr = str_split($str);
        $filteredArr = array_filter($charArr, function($value){
            return ctype_lower($value) || ctype_upper($value);
        });
        $filteredStr = implode("", $filteredArr);
        if ($trimmedStr[strlen($trimmedStr) - 1] === "?") {
            return ctype_upper($filteredStr) ? "Calm down, I know what I'm doing!" : "Sure.";
        } elseif (ctype_upper($filteredStr)) {
            return "Whoa, chill out!";
        } else {
            return "Whatever.";
        }
    }
}
