<?php

namespace BrainGames\Games\Gcd;

function gameName()
{
    return 'Greatest Common Divisor';
}

// Функция "описать игру"
function describeGame()
{
    return 'Find the Greates Common Divider for two numbers';
}

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : abs($b);
}

// Функция "поставить условие"
// Возвращает массив с условием задачи и правильным ответом
function createQuestionAndAnswer()
{
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $question = "What is GCD for numbers {$number1} and {$number2}";
    $answer = gcd($number1, $number2);

    return ['question' => $question, 'answer' => $answer];
}
