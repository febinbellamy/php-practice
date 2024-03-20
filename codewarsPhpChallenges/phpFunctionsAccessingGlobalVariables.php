<?php   

/* 
Task

Declare and define the following functions as instructed.

increment_x() - This function should increment a global variable $x by 1 every time the function is called.

double_x_triple_y_quadruple_z() - This function should double a global variable $x, triple a global variable $y and quadruple a global variable $z every time the function is called

append_whitespace_to_string() - This function should append a whitespae character " " to a global variable $string every time the function is called.

add_world_to_string() - This function should add the string "world" to the end of a global variable $string every time the function is called.

https://www.codewars.com/kata/57db5923d8f92929380001ae
*/
function increment_x()
{
  global $x;
  $x += 1;
}

function double_x_triple_y_quadruple_z()
{
  global $x, $y, $z;
  $x *= 2;
  $y *= 3;
  $z *= 4;
}

function append_whitespace_to_string()
{
  global $string;
  $string = $string . " ";
}

function add_world_to_string()
{
  global $string;
  $string = $string . "world";
}