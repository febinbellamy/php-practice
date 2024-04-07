<?php
/* 
https://www.codewars.com/kata/57d29ccda56edb4187000052

In this kata, your task is to implement an extended version of the famous rock-paper-scissors game. The rules are as follows:

Scissors cuts Paper
Paper covers Rock
Rock crushes Lizard
Lizard poisons Spock
Spock smashes Scissors
Scissors decapitates Lizard
Lizard eats Paper
Paper disproves Spock
Spock vaporizes Rock
Rock crushes Scissors

Task:
Given two values from the above game, return the Player result as "Player 1 Won!", "Player 2 Won!", or "Draw!".

Inputs
Values will be given as one of "rock", "paper", "scissors", "lizard", "spock".
*/

function rpsls($player1, $player2){
  $weaknesses = ["rock" => ["paper", "spock"], "paper" => ["scissors", "lizard"], "scissors" => ["rock", "spock"], "lizard" => ["scissors", "rock"], "spock" => ["lizard", "paper"]];
  if (in_array($player2, $weaknesses[$player1])) {
    return "Player 2 Won!";
  } elseif (in_array($player1, $weaknesses[$player2])) {
    return "Player 1 Won!";
  } else {
    return "Draw!";
  }
}