<?php

namespace BrainGames\Games\Progression;

function gameName()
{
    return 'Hole in Progression';
}

// Функция "описать игру"
function describeGame()
{
    return 'Fill the hole in progression';
}

function getProgressionArray() {
    $arr = [];
    $length = rand(5, 15);
    $arr[] = rand(0, 5);
    $step = rand(1, 3);
    for ($i = 0; $i < $length; $i++) {
        $arr[] = $arr[count($arr) -1] + $step;
    }
    return $arr;
}

// Функция "поставить условие"
// Возвращает массив с условием задачи и правильным ответом
function createQuestionAndAnswer()
{

    $progressionArray = getProgressionArray();

    $hole_position = rand(0, count($progressionArray) - 1);
    
    $answer = $progressionArray[$hole_position];
    $progressionArray[$hole_position] = '..';

    $question = implode(' ', $progressionArray);

    return ['question' => $question, 'answer' => $answer];
}