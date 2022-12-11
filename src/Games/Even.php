<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\startGame;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number)
{
    return $number % 2 === 0 ?? false;
}

function startEvenGame()
{
    $gameData = function () {
        $question = rand(1, 200);
        $answer = isEven($question) ? 'yes' : 'no';
        return [
            'question' => $question,
            'answer' => $answer
        ];
    };
    startGame($gameData, TASK);
}
