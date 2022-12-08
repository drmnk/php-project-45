<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greet(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function isEven($number)
{
    return $number % 2 === 0 ?: false;
}

function lose($answer, $correct)
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
    line("Let's try again, Bill!");
}

function game($name): void
{
    $correctAnswers = 0;
    line('Answer "yes" if the number is even, otherwise answer "no":\n');
    while ($correctAnswers < 3) {
        $number = random_int(1, 100);
        $correct = isEven($number) ? 'yes' : 'no';

        line("Question: {$number}: ");
        $answer = prompt('Your answer');

        // Сперва проверим ответ на корректность в терминах
        if (!in_array($answer, ['yes', 'no'])) {
            lose($answer, $correct);
            return;
        }

        // Теперь проверим, что ответ в общем правильный
        if ($answer !== $correct) {
            lose($answer, $correct);
            return;
        }

        line('Correct!');
        $correctAnswers++;
    }

    line("Congratulations, {$name}");
}
