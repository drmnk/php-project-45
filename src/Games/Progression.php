<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\startGame;

const TASK = "What number is missing in the progression?";

function getProgressionArray()
{
    $arr = [];
    $length = rand(5, 15);
    $arr[] = rand(0, 5);
    $step = rand(1, 3);
    for ($i = 0; $i < $length; $i++) {
        $arr[] = $arr[count($arr) - 1] + $step;
    }
    return $arr;
}

function startProgressionGame()
{
    $gameData = function () {
        $progressionArray = getProgressionArray();

        $hole_position = rand(0, count($progressionArray) - 1);

        $answer = $progressionArray[$hole_position];
        $progressionArray[$hole_position] = '..';

        $question = implode(' ', $progressionArray);

        return ['question' => $question, 'answer' => (string) $answer];
    };

    startGame($gameData, TASK);
}
