<?php

namespace BrainGames\Games\Even;

function gameName()
{
    return 'Even or not';
}

// Функция "описать игру"
function gameDescription()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function isEven($number)
{
    return $number % 2 === 0 ?: false;
}

// Функция "поставить условие"
// Возвращает массив с условием задачи и правильным ответом
function createQuestionAndAnswer()
{
    $number = rand(1, 100);
    $question = "Question: {$number}";
    $answer = isEven($number) ? 'yes' : 'no';

    return ['question' => $question, 'answer' => $answer];
}
