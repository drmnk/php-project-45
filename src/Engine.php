<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function cli\err;

// function greet(string $gameName): string
// {
//     line("Welcome to the {$gameName}!");
//     $name = prompt('May I have your name?');
//     line("Hello, %s!", $name);
//     return $name;
// }

// function lose($answer, $correct, $name)
// {
//     line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
//     line("Let's try again, {$name}!");
//     return true;
// }

// function askQuestion($question)
// {
//     line($question);
//     return prompt('Your answer');
// }

// function correct()
// {
//     line('Correct!');
// }

// function congratulate($name)
// {
//     line("Congratulations, {$name}!");
//     return true;
// }

// function describeGame($description)
// {
//     line($description);
//     return true;
// }

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
    line($gameTask);
    $name = prompt("May I have your name?");
    line("Hello, {$name}!");

    $correctAnswers = 0;
    while ($correctAnswers < GAME_ROUNDS) {
        ['question' => $question, 'answer' => $answer] = $gameData();
        line($question);
        $userAnswer = prompt('Your answer');
        if ($answer !== $userAnswer) {
            err("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$name}!");
            exit;
        }
        line('Correct');
        $correctAnswers++;
    }
    line("Congratulations, {$name}");
}
