<?php 

/* 
Task
Define and implement the following functions as instructed.

multiply() - This function should receive two arguments $a and $b, both of which are expected to be integers, and return the product of the two integers.

get_profile() - This function should expect an instance of the Person class as its one and only argument and return a string of the format:
"Name: PERSONS_NAME_HERE
Age: PERSONS_AGE_HERE
Gender: PERSONS_GENDER_HERE
Occupation: PERSONS_OCCUPATION_HERE"

https://www.codewars.com/kata/57d6ae421a6282aa4f000b97
*/
function multiply(int $a, int $b)
{
  return $a * $b;
}

function get_profile(Person $personInstance)
{ 
  return "Name: {$personInstance->name}\nAge: {$personInstance->age}\nGender: {$personInstance->gender}\nOccupation: {$personInstance->occupation}";
}