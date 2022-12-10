<?php

namespace BrainGames\Games\Simple;

function gameName()
{
    return 'Simple Number';
}

// Функция "описать игру"
function describeGame()
{
    return 'You need to guess - is the number simple? Answer yes or no.';
}

function isSimple($number) {
    $simple = true;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $simple = false;
        }
    }
    return $simple;

}

// Функция "поставить условие"
// Возвращает массив с условием задачи и правильным ответом
function createQuestionAndAnswer()
{
    $number = rand(2, 200);
    $question = "Is number {$number} simple?";
    $answer = isSimple($number) ? 'yes' : 'no';

    return ['question' => $question, 'answer' => $answer];
}