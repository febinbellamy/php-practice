<?php
/* 
Copy your working solution to the first Kata of this series and paste it here (you may want to complete that first if you haven't already done so).

Rename that class to CurrentUSPresident.

Convert all of the class properties into class constants and all of the class methods into static methods using the syntax taught in the lesson.

You can safely remove the code where an instance of the President class is created.

https://www.codewars.com/kata/579893057cb7a1be7900030d
*/
class CurrentUSPresident 
{
  const name = "Barack Obama";
  
  public static function greet($name) 
  {
    return "Hello $name, my name is ".self::name . ", nice to meet you!";
  }
}