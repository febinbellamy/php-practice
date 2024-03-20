<?php
/* 

You have been working in the city office for a while, and you have developed a set of tools that speed up your day-to-day work, for example with filling out forms.

Now, a new colleague is joining you, and you realized your tools might not be self-explanatory. There are a lot of weird conventions in your office, like always filling out forms with uppercase letters and avoiding leaving fields empty.

As a first step you decide to add PHP type declarations so that it is easier for your new colleague to hop right in and start using your tools.

Task 1:
Add property type declarations to each of the Address class properties declared. Each class property should be declared as a string.

Task 2:
Add a parameter type declaration and a return type declaration to the blanks method in the Form class. The method should take in an integer length, and return a string representation of the blank line.

Task 3:
Add a parameter type declaration and a return type declaration to the letters method in the Form class. The method should take in a string, representing words, and return an array of letters.

Task 4:
Add parameter type declarations and a return type declaration to the checkLength method in the Form class. The method should take in a string word, and an integer maximum length, and return a true or false value.

Task 5:
Add a parameter type declaration, making use of the Address class updated previously, and a return type declaration to the formatAddress method in the Form class. The method should take in an Address and return a formatted string.
*/
class Form
{
    function blanks(int $length): string
    {
        return str_repeat(" ", $length);
    }

    function letters(string $word): array
    {
        return mb_str_split($word);
    }

    function checkLength(string $word, int $max_length): bool
    {
        $difference = mb_strlen($word) - $max_length;
        return $difference <= 0;
    }

    function formatAddress(Address $address): string
    {
        $formatted_street = mb_strtoupper($address->street);
        $formatted_postal_code = mb_strtoupper($address->postal_code);
        $formatted_city = mb_strtoupper($address->city);

        return <<<FORMATTED_ADDRESS
            $formatted_street
            $formatted_postal_code $formatted_city
            FORMATTED_ADDRESS;
    }
}
