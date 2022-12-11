<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function cli\err;

define('GAME_ROUNDS', 3);

function greet(): string
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?');
    line("Hello, {$name}");
    return $name;
}

function startGame(callable $gameData, $gameTask)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, {$name}!");

    line($gameTask);

    $correctAnswers = 0;
    while ($correctAnswers < GAME_ROUNDS) {
        ['question' => $question, 'answer' => $answer] = $gameData();
        line("Question: $question");
        $userAnswer = prompt('Your answer');
        if ($answer !== $userAnswer) {
            err("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$name}!");
            exit;
        }
        line('Correct');
        $correctAnswers++;
    }
    line("Congratulations, {$name}!");
}
