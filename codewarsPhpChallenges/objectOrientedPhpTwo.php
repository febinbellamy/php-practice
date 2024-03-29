<?php

/*
Define a class called Person.

Inside the Person class, declare (but do not define) the two public properties, called $first_name and $last_name respectively.

Define a class constructor which accepts exactly two arguments in the following order, $first_name and $last_name. The argument $first_name should be stored into the $first_name property of the object being instantiated and the $last_name argument should be stored into the $last_name property of the object.

Define a public method called get_full_name which accepts no arguments and returns the full name of the individual in the following format: "FIRST_NAME LAST_NAME". Please note that if the properties ($first_name and/or $last_name) of said object is modified after it is instantiated, your method get_full_name should return the updated full name, not the original full name of the individual.

https://www.codewars.com/kata/579775203467db17b500037b
*/
class Person 
{
  public $first_name;
  public $last_name;
  
  function __construct($first_name, $last_name) 
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }
  public function get_full_name() 
  {
    return "$this->first_name $this->last_name"; 
  }
}
