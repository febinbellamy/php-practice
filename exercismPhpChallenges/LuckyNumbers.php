<?php
/* 
https://exercism.org/tracks/php/exercises/lucky-numbers/

Instructions
Your friend Kojo is a big fan of numbers. He has a small website for playing around with numbers. Kojo is not that good at programming so he asked you for help.

You will build two helper methods for new number games on Kojos' website and a third one to validate some input the user can enter.

Task 1:
One of the games on Kojos' website looks like a slot machine that shows two groups of wheels with digits on them. Each group of digits represents a number. For the game mechanics, Kojo needs to know the sum of those two numbers.

Write a method sumUp that accepts two arrays as parameters. Each array consists of one or more digits between 0 and 9. The function should interpret each array as a number and return the sum of those two numbers.

<?php
$lucky_numbers = new LuckyNumbers()
$lucky_numbers->sumUp([1, 2, 3], [0, 7]);
//=> 130
// [1, 2, 3] represents 123 and [0, 7] represents 7.
// 123 + 7 = 130


Task 2:
Another game on the website is a little quiz called "Lucky Numbers". A user can enter a number and then sees whether the number belongs to some secret sequence or pattern. The sequence or pattern of the "lucky numbers" changes each month and each user only has a limited number of tries to guess it.

This months' lucky numbers should be numbers that are palindromes. Palindromic numbers remain the same when the digits are reversed.

Implement the new isPalindrome function that accepts an integer as a parameter. The function should return true if the number is a palindrome and false otherwise. The input number will always be a positive integer.

<?php
$lucky_numbers = new LuckyNumbers()
$lucky_numbers->isPalindrome(1441);
//=>  true
$lucky_numbers->isPalindrome(123);
//=> false


Task 3:
In various places on the website, there are input fields where the users can enter numbers and click a button to trigger some action. Kojo wants to improve the user experience of his site. He wants to show an error message in case the user clicks the button but the field contains an invalid input value.

Here is some more information on how the value of an input field is provided.

– If the user types something into a field, the associated value is always a string even if the user only typed in numbers.
– If the user types something but deletes it again, the variable will be an empty string.
– Before the user even started typing, the variable will be an empty string.

Write a function validate that accepts the user input as a parameter. If the user did not provide any input, validate should return 'Required field'. If the input does not represent a positive non-zero whole number (according to the PHP type casting rules), 'Must be a whole number larger than 0' should be returned. In all other cases you can assume the input is valid, the return value should be an empty string then.

<?php
$lucky_numbers = new LuckyNumbers()
$lucky_numbers->validate('123');
// => ''
$lucky_numbers->validate('');
// => 'Required field'
$lucky_numbers->validate('abc');
// => 'Must be a whole number larger than 0'
*/

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $arrOfStrings1 = implode($digitsOfNumber1); 
        $arrOfStrings2 = implode($digitsOfNumber2);
        return (int) $arrOfStrings1 + (int) $arrOfStrings2;
    }

    public function isPalindrome(int $number): bool
    {
        $reversedString = strrev((string)$number);
        return $reversedString === (string)$number;
    }

    public function validate(string $input): string
    {
        if ($input === "")
        {
            return "Required field";
        }

        $strToNumber = intval($input);
        if ($strToNumber === 0 || ((string)$strToNumber)[0] === "-")
        {
            return 'Must be a whole number larger than 0';
        } else {
            return ""; 
        }
    }
}
