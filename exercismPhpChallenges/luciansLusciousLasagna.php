<?php

/* 
https://exercism.org/tracks/php/exercises/lasagna

In this exercise you're going to write some code to help you cook a brilliant lasagna from your favorite cooking book.

You have five tasks, all related to the time spent cooking the lasagna.


Task 1:
Implement the expectedCookTime function in class Lasagna that does not take any arguments and returns how many minutes the lasagna should be in the oven. According to the cooking book, the expected oven time in minutes is 40:

<?php
$timer = new Lasagna();
$timer->expectedCookTime()
// => 40


Task 2:
Implement the remainingCookTime function in class Lasagna that takes the actual minutes the lasagna has been in the oven as an argument and returns how many minutes the lasagna still has to remain in the oven, based on the expected oven time in minutes from the previous task.

<?php
$timer = new Lasagna();
$timer->remainingCookTime(30)
// => 10


Task 3:
Implement the totalPreparationTime function in class Lasagna that takes the number of layers you added to the lasagna as an argument and returns how many minutes you spent preparing the lasagna, assuming each layer takes you 2 minutes to prepare.

<?php
$timer = new Lasagna();
$timer->totalPreparationTime(3)
// => 6


Task 4:
Implement the totalElapsedTime function in class Lasagna that takes two arguments: the first argument is the number of layers you added to the lasagna, and the second argument is the number of minutes the lasagna has been in the oven. The function should return how many minutes in total you've worked on cooking the lasagna, which is the sum of the preparation time in minutes, and the time in minutes the lasagna has spent in the oven at the moment.

<?php
$timer = new Lasagna();
$timer->totalElapsedTime(3, 20)
// => 26


Task 5:
Implement the alarm function in class Lasagna that does not take any arguments and returns a message indicating that the lasagna is ready to eat.

<?php
$timer = new Lasagna();
$timer->alarm()
// => "Ding!"
*/

class Lasagna
{
    public function expectedCookTime()
    {
        return 40;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        return $layers_to_prep * 2;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        return $this->totalPreparationTime( $layers_to_prep ) + $elapsed_minutes;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
