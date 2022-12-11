<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\startGame;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isSimple($number)
{
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
function startPrimeGame()
{
    $gameData = function () {
        $number = rand(2, 200);
        $question = "{$number}";
        $answer = isSimple($number) ? 'yes' : 'no';

        return ['question' => $question, (string) 'answer' => $answer];
    };
    startGame($gameData, TASK);
}
