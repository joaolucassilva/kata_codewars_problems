<?php

namespace App\Php\Fundamentals;

/**
 *  Given a non-empty array of integers, return the result of multiplying the values together in order.
 *  Example:
 *  [1,2,3,4] => 1 * 2 * 3 * 4 = 24;
 */

class ReduceButGrow
{
    function grow($numbers)
    {
        return array_reduce($numbers, function ($carry, $item) {
            return $carry *= $item;
        }, 1);
    }
}
