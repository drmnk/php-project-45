<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greet(string $gameName): string
{
    line("Welcome to the {$gameName}!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function lose($answer, $correct, $name)
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
    line("Let's try again, {$name}!");
    return true;
}

function askQuestion($question)
{
    line($question);
    return prompt('Your answer');
}

function correct()
{
    line('Correct!');
}

function congratulate($name)
{
    line("Congratulations, {$name}!");
    return true;
}

function describeGame($description)
{
    line($description);
    return true;
}
