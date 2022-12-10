<?php

namespace BrainGames\Games\Calc;

const OPERATIONS = ['-', '+', '*'];

// имя игры
function gameName()
{
    return 'Calculations';
}

// Функция "описать игру"
function describeGame()
{
    return 'What is the result of the expression?';
}

// Функция "поставить условие"
// Возвращает массив с условием задачи и правильным ответом
function createQuestionAndAnswer()
{
    $operation = OPERATIONS[rand(0, 2)];
    $number1 = rand(0, 100);
    $number2 = rand(0, 100);
    $answer = null;
    $question = '';

    switch ($operation) {
    case '-':
        $answer = $number1 - $number2;
        $question = "Question: {$number1} - {$number2}?";
        break;
    case '+':
        $answer = $number1 + $number2;
        $question = "Question: {$number1} + {$number2}?";
        break;
    case '*':
        $answer = $number1 * $number2;
        $question = "Question: {$number1} * {$number2}?";
        break;
    }

    return ['question' => $question, 'answer' => $answer];
}