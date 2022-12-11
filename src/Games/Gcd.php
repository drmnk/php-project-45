<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\startGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : abs($b);
}


function startGcdGame()
{
    $gameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "{$number1} {$number2}";
        $answer = gcd($number1, $number2);
    
        return ['question' => $question, 'answer' => (string) $answer];
    };

    startGame($gameData, TASK);    
}
