<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\startGame;

const OPERATIONS = ['-', '+', '*'];
const TASK = 'What is the result of the expression?';

function startCalcGame()
{
    $gameData = function () {
        $operation = OPERATIONS[rand(0, 2)];
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $answer = null;
        $question = '';
    
        switch ($operation) {
            case '-':
                $answer = $number1 - $number2;
                $question = "{$number1} - {$number2}?";
                break;
            case '+':
                $answer = $number1 + $number2;
                $question = "{$number1} + {$number2}?";
                break;
            case '*':
                $answer = $number1 * $number2;
                $question = "{$number1} * {$number2}?";
                break;
        }
    
        return ['question' => $question, 'answer' => (string) $answer];
    };

    startGame($gameData, TASK);
}
